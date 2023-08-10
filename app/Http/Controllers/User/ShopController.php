<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($id=null){
        $query = Product::query();

        if ($id !== null) {
            $query->whereHas('category', function ($subquery) use ($id) {
                $subquery->where('id', $id);
            });
        }
    
        $products = $query->with('plantInfo', 'category', 'images')
                          ->paginate(12);
        return view('pages.shop.index',compact('products'));
    }
    public function detail(){
        return view('pages.shop.detail');
    }
}
