<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index($id = null)
    {
       
        $query = Product::query();
        // Check if products are empty
        $user = Auth::user(); // Assuming you have authentication set up

        

        if ($id !== null) {
        $query = Product::query();
        $check = $query->where('category_id',$id)->get(); // Fetch products from the provided category
        if ($check->isEmpty()) {
            $products = Product::whereHas('category', function ($query) use ($id) {
                $query->where('parent_id', $id);
            })
            ->with('images', 'plantInfo')
            ->paginate(12);
            if ($user) {
            // Retrieve the user's wishlist items
            $wishlistItems = $user->wishlistItems()->pluck('product_id')->toArray();

            // Add a flag to each product indicating whether it's in the wishlist
            foreach ($products as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
           
        }
        }
        else if ($id !== null) {
            $query->whereHas('category', function ($subquery) use ($id) {
                $subquery->where('id', $id);
            });
            $products = $query->with('plantInfo', 'images')
            ->paginate(12);
            if ($user) {
            // Retrieve the user's wishlist items
            $wishlistItems = $user->wishlistItems()->pluck('product_id')->toArray();

            // Add a flag to each product indicating whether it's in the wishlist
            foreach ($products as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
           
        }
        }

        else{
            $products = $query->with('plantInfo', 'images')
            ->paginate(12);
            if ($user) {
            // Retrieve the user's wishlist items
            $wishlistItems = $user->wishlistItems()->pluck('product_id')->toArray();

            // Add a flag to each product indicating whether it's in the wishlist
            foreach ($products as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
           
        }
            
        }}
        else{

            $products = $query->with('plantInfo', 'category', 'images')->paginate(12);
            if ($user) {
            // Retrieve the user's wishlist items
            $wishlistItems = $user->wishlistItems()->pluck('product_id')->toArray();

            // Add a flag to each product indicating whether it's in the wishlist
            foreach ($products as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
           
        }
        }
        
        return view('pages.shop.index', compact('products'));
    }
    public function detail($id)
    {
        $product = Product::with('plantInfo', 'category', 'images')->find($id);

        $relatedProducts = Product::with('plantInfo', 'category', 'images')
            ->where('category_id', $product->category_id)->get()
            ->take(8);

            // dd($relatedProducts);
        return view('pages.shop.detail', compact('product','relatedProducts'));
    }
}
