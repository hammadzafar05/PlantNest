<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($id = null)
    {
        // Check if products are empty
        

        $query = Product::query();
        $check = $query->where('category_id',$id)->get(); // Fetch products from the provided category
        if ($check->isEmpty()) {
            $products = Product::whereHas('category', function ($query) use ($id) {
                $query->where('parent_id', $id);
            })
            ->with('images', 'plantInfo')
            ->paginate(12);
        }
        else if ($id !== null) {
            $query->whereHas('category', function ($subquery) use ($id) {
                $subquery->where('id', $id);
            });
            $products = $query->with('plantInfo', 'images')
            ->paginate(12);
        }
        else{
            $products = $query->with('plantInfo', 'images')
            ->paginate(12);

        }
        

 
        // $query = Product::query();

        return view('pages.shop.index', compact('products'));
        // if ($id !== null) {
        //     $query->whereHas('category', function ($subquery) use ($id) {
        //         $subquery->where('id', $id);
        //     });
        // }

        // $products = $query->with('plantInfo', 'category', 'images')
        //     ->paginate(12);
    }
    public function detail($id)
    {
        $product = Product::with('plantInfo', 'category', 'images')->find($id);

        $relatedProducts = Product::with('plantInfo', 'category', 'images')
            ->where('category_id', $product->category_id)->get()
            ->take(8);

        // dd($relatedProducts);
        return view('pages.shop.detail', compact('product', 'relatedProducts'));
    }
}
