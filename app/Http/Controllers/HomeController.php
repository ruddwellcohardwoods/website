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
        // If path is null or empty, return a default or null
        if (empty($imagePath)) {
            return null;
        }

        // Remove 'storage/' prefix if it exists
        $cleanPath = str_replace('storage/', '', $imagePath);
        
        // Generate the optimized path
        $fileExtension = pathinfo($cleanPath, PATHINFO_EXTENSION);
        $fileName = pathinfo($cleanPath, PATHINFO_FILENAME);
        $optimizedPath = 'optimized/' . $fileName . '.webp';
        $optimizedFullPath = storage_path('app/public/' . $optimizedPath);
        
        // Check if optimized version already exists
        if (file_exists($optimizedFullPath)) {
            return 'storage/' . $optimizedPath;
        }
        
        // Path to the original image
        $originalImagePath = storage_path('app/public/' . $cleanPath);
        
        // Check if original file exists
        if (!file_exists($originalImagePath)) {
            // Log the error or return the original path
            \Log::warning("Image not found: {$originalImagePath}");
            return 'storage/' . $cleanPath; // Return original path if file doesn't exist
        }
        
        try {
            // Ensure the optimized directory exists
            $optimizedDir = storage_path('app/public/optimized');
            if (!file_exists($optimizedDir)) {
                mkdir($optimizedDir, 0755, true);
            }
            
            // Create optimized image with higher resolution and quality
            $image = Image::make($originalImagePath)
                ->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('webp', 90);
        
            // Save optimized image
            Storage::put('public/' . $optimizedPath, (string) $image);
        
            return 'storage/' . $optimizedPath;
        } catch (\Exception $e) {
            // Log the error and return original path as fallback
            \Log::error("Failed to optimize image {$imagePath}: " . $e->getMessage());
            return 'storage/' . $cleanPath;
        }
    }
}
