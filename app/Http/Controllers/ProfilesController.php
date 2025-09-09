<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all categories with their subcategories
        $categories = Category::with(['subcategories'])->get();

        // Check if there are categories
        if ($categories->isEmpty()) {
            return view('pages.profiles', [
                'categories' => collect(), 
                'products' => collect(), 
                'paginationLinks' => '',
                'emptyStateMessage' => 'No profiles available at the moment.'
            ]);
        }

        // Capture the subcategory_id from the query string
        $subcategoryId = $request->query('subcategory_id');
        $productName = $request->query('name');
        $page = $request->query('page', 1);
        $categoryId = null;

        // If a subcategory is selected, filter products by that subcategory
        if ($subcategoryId) {
            $paginatedProducts = Product::where('sub_category_id', $subcategoryId)->paginate(6)->onEachSide(1);
            $subcategory = Subcategory::find($subcategoryId);
            $categoryId = $subcategory ? $subcategory->category_id : null;
        } elseif ($productName) {
            $paginatedProducts = Product::where('name', 'LIKE', '%' . $productName . '%')->paginate(6)->onEachSide(1);
        } else {
            // Otherwise, fetch all products
            $paginatedProducts = Product::paginate(6)->onEachSide(1);
        }

        // Check if there are products
        if ($paginatedProducts->isEmpty()) {
            return view('pages.profiles', [
                'categories' => $categories,
                'products' => collect(),
                'paginationLinks' => '',
                'emptyStateMessage' => 'No profiles available for the selected subcategory.'
            ]);
        }

        // Optimize images for each product
        foreach ($paginatedProducts as $product) {
            $product->image_url = $this->optimizeImage($product->image_url);
        }

        // Set pagination links and ensure they include the subcategory_id in the query string
        $paginationLinks = $paginatedProducts->appends(['subcategory_id' => $subcategoryId, 'page' => $page])->links()->render();

        $paginationLinks = $paginatedProducts->links()->render();

        if ($request->ajax()) {
            $products = $paginatedProducts->items();
            return response()->json([
                'html' => view('layouts.partials.productlist', compact('products', 'paginationLinks'))->render(),
                'categoryId' => $categoryId,
            ]);
        }

        // Return the view with the necessary data
        return view('pages.profiles', [
            'categories' => $categories,
            'products' => $paginatedProducts->items(),
            'paginationLinks' => $paginationLinks,
            'categoryId' => $categoryId,
            'emptyStateMessage' => null
        ]);
    }

    private function optimizeImage($imagePath)
    {
        try {
            // Path to the original image
            $originalImagePath = storage_path('app/public/' . $imagePath);

            // Ensure original image exists
            if (!file_exists($originalImagePath)) {
                return $imagePath;
            }

            // Ensure optimized directory exists
            $optimizedDir = storage_path('app/public/optimized');
            if (!file_exists($optimizedDir)) {
                mkdir($optimizedDir, 0755, true);
            }

            // Create optimized image
            $image = Image::make($originalImagePath)
                          ->resize(1200, 1200, function ($constraint) {
                              $constraint->aspectRatio();
                              $constraint->upsize();
                          })
                          ->encode('webp', 95);

            // Generate optimized path, preserving original file name
            $originalName = pathinfo($imagePath, PATHINFO_FILENAME);
            $optimizedPath = 'optimized/' . $originalName . '.webp';
            
            // Save optimized image
            Storage::put('public/' . $optimizedPath, (string) $image);

            // Return the path relative to public storage
            return 'storage/' . $optimizedPath;
        } catch (\Exception $e) {
            \Log::error('Image optimization failed: ' . $e->getMessage());
            return $imagePath; // Fallback to original image if optimization fails
        }
    }

    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->query('query');
    
        // Fetch the products where the name matches the query and eager-load the subcategory and category
        $products = Product::where('name', 'LIKE', '%' . $query . '%')
            ->with('subcategory.category') // Load subcategory and category
            ->get();
    
        // Return the filtered products as JSON
        return response()->json([
            'products' => $products->map(function($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image_url' => $product->image_url,
                    'subcategory_id' => $product->subcategory ? $product->subcategory->id : null,
                    'category_id' => $product->subcategory && $product->subcategory->category ? $product->subcategory->category->id : null
                ];
            }),
        ]);
    }
}
