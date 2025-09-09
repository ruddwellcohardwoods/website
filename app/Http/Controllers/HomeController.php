<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category; // Add this to use the Category model
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all categories with their subcategories
        $categories = Category::with('subcategories')->get();
    
        // Handle empty state for categories
        if ($categories->isEmpty()) {
            return view('pages.home', [
                'categories' => collect(), 
                'paginatedProducts' => collect(), 
                'paginationLinks' => '', 
                'activeCategoryId' => null, 
                'firstSubcategory' => null
            ]);  
        }
    
        $categoryId = $request->query('category_id');
        
        // Check if a category is selected or use the first category by default
        if ($categoryId) {
            $activeCategory = Category::with('subcategories')->find($categoryId);
        } else {
            $activeCategory = $categories->first();
        }
    
        $firstSubcategory = null;
    
        // Ensure we have at least one subcategory in the selected category that has products
        if ($activeCategory && $activeCategory->subcategories->isNotEmpty()) {
            foreach ($activeCategory->subcategories as $subcategory) {
                if (Product::where('sub_category_id', $subcategory->id)->exists()) {
                    $firstSubcategory = $subcategory;
                    break; // Stop once we find the first subcategory with products
                }
            }
    
            // If a valid subcategory with products was found
            if ($firstSubcategory) {
                $paginatedProducts = Product::where('sub_category_id', $firstSubcategory->id)->paginate(3);
                $activeCategoryId = $activeCategory->id;
            } else {
                // No subcategories with products found
                $paginatedProducts = collect();
                $activeCategoryId = null;
            }
        } else {
            // No subcategories found
            $paginatedProducts = collect();
            $activeCategoryId = null;
        }
    
        // Optimize images for each product if products exist
        if ($paginatedProducts->isNotEmpty()) {
            foreach ($paginatedProducts as $product) {
                $product->image_url = $this->optimizeImage($product->image_url);
            }
        }
    
        // Check if paginatedProducts is an instance of LengthAwarePaginator before calling links()
        $paginationLinks = ($paginatedProducts instanceof LengthAwarePaginator) 
            ? $paginatedProducts->links()->render() 
            : collect(); // Return an empty collection if it's not paginated
    
        // Handle AJAX request
        if ($request->ajax()) {
            return response()->json([
                'html' => view('layouts.partials.products', compact('paginatedProducts', 'paginationLinks', 'firstSubcategory'))->render(),
                'activeCategoryId' => $activeCategoryId
            ]);
        }
    
        // Return the view with all necessary data
        return view('pages.home', compact('categories', 'paginatedProducts', 'paginationLinks', 'activeCategoryId', 'firstSubcategory'));
    }


    private function optimizeImage($imagePath)
    {
        // Path to the original image
        $originalImagePath = storage_path('app/public/' . $imagePath);
        
        // Create optimized image with higher resolution and quality
        $image = Image::make($originalImagePath)
            ->resize(600, 600, function ($constraint) {  // Increase size to 600x600
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->encode('webp', 90); // Use WebP format and increase quality to 90%
    
        // Save optimized image to storage/app/public/optimized
        $optimizedPath = 'optimized/' . basename($imagePath, '.jpg') . '.webp';
        Storage::put('public/' . $optimizedPath, (string) $image);
    
        return 'storage/' . $optimizedPath;
    }
}
