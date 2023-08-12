<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    public function index(Request $request, $id = null)
    {

        $query = Product::query();
        // Check if products are empty
        $user = Auth::user();

        // Apply category filter if selected
        $selectedCategories = $request->input('categories', []);
        if (!empty($selectedCategories)) {
            $query->whereIn('category_id', $selectedCategories);
        }

        // Filter by category
        // if ($request->has('categories')) {
        //     $categories = $request->input('categories');
        //     $query->whereHas('categories', function ($q) use ($categories) {
        //         $q->whereIn('category_id', $categories);
        //     });
        // }

        // Apply sorting based on the selected option
        $orderBy = $request->input('orderby', 'default');
        switch ($orderBy) {
            case '1':
                $query->orderBy('average_rating', 'desc');
                break;
            case '2':
                $query->orderBy('popularity', 'desc');
                break;
            case '3':
                $query->orderBy('created_at', 'desc');
                break;
            case '4':
                $query->orderBy('price', 'asc');
                break;
            case '5':
                $query->orderBy('price', 'desc');
                break;
            case '6':
                $query->orderBy('name', 'desc');
                break;
            case '7':
                $query->orderBy('name', 'asc');
                break;
            default:
                // Default sorting, you can adjust this as needed
                $query->orderBy('name', 'desc');
                break;
        }

        // Apply price filter if selected
        $minPrice = $request->input('min-price');
        $maxPrice = $request->input('max-price');
        
        if ($minPrice && $maxPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        if ($id !== null) {
            $query = Product::query();
            $check = $query->where('category_id', $id)->get(); // Fetch products from the provided category
            if ($check->isEmpty()) {
                $products = Product::whereHas('category', function ($query) use ($id) {
                    $query->where('parent_id', $id);
                })
                    ->with('images', 'plantInfo')
                    ->paginate(12);
            } else if ($id !== null) {
                $query->whereHas('category', function ($subquery) use ($id) {
                    $subquery->where('id', $id);
                });
                $products = $query->with('plantInfo', 'images')
                    ->paginate(12);
            } else {
                $products = $query->with('plantInfo', 'images')
                    ->paginate(12);
            }
        } else {

            $products = $query->with('plantInfo', 'category', 'images')->paginate(12);
        }
        if ($user) {

            $wishlistItems = $user->wishlistItems()->pluck('product_id')->toArray();


            foreach ($products as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
        }


        return view('pages.shop.index', compact('products'));
    }
    public function detail($id)
    {
        $user = Auth::user();

        $product = Product::with('plantInfo', 'category', 'images')->find($id);

        $relatedProducts = Product::with('plantInfo', 'category', 'images')
            ->where('category_id', $product->category_id)->get()
            ->take(8);
        if ($user) {

            $wishlistItems = $user->wishlistItems()->pluck('product_id')->toArray();


            foreach ($relatedProducts as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }




            $product->in_wishlist = in_array($product->id, $wishlistItems);
        }

        // dd($relatedProducts);
        return view('pages.shop.detail', compact('product', 'relatedProducts'));
    }
}
