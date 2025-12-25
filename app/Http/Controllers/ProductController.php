<?php

namespace App\Http\Controllers;

use App\Models\Sunglass;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Sunglass::with('category')
            ->where('is_active', true);

        // Filter by category
        if ($request->category) {
            $query->where('category_id', $request->category);
        }

        // Search functionality
        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'LIKE', "%{$request->search}%")
                  ->orWhere('brand', 'LIKE', "%{$request->search}%")
                  ->orWhere('description', 'LIKE', "%{$request->search}%");
            });
        }

        // Sort functionality
        $sortField = $request->input('sort', 'created_at');
        $sortDirection = $request->input('direction', 'desc');
        
        $products = $query->orderBy($sortField, $sortDirection)->paginate(12);

        // Get categories for filter
        $categories = Category::all();

        return view('shop.index', compact('products', 'categories'));
    }

    public function show(Sunglass $product)
    {
        // Also get related products for "You might also like"
        $relatedProducts = Sunglass::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('shop.show', compact('product', 'relatedProducts'));
    }

    public function getByCategory(Category $category)
    {
        $products = Sunglass::where('category_id', $category->id)
            ->where('is_active', true)
            ->paginate(12);

        return view('shop.index', compact('products', 'category'));
    }

    public function search(Request $request)
    {
        $search = $request->input('q');
        $products = Sunglass::where(function ($query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('brand', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
        })
        ->where('is_active', true)
        ->paginate(12);

        return view('shop.index', compact('products', 'search'));
    }
}