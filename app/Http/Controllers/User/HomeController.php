<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index()
    {
        $plantCategory = Category::where('name', 'plants')->first();
        $accessortCategory = Category::where('name', 'accessories')->first();
        $trendingProducts = Product::select('products.*')
            ->leftJoin(DB::raw('(SELECT product_id, COUNT(*) as clicks FROM clicked_items GROUP BY product_id) as clicked'), 'products.id', '=', 'clicked.product_id')
            ->leftJoin(DB::raw('(SELECT product_id, COUNT(*) as searches FROM search_filters GROUP BY product_id) as searched'), 'products.id', '=', 'searched.product_id')
            ->leftJoin(DB::raw('(SELECT product_id, COUNT(*) as filters FROM search_filters GROUP BY product_id) as filtered'), 'products.id', '=', 'filtered.product_id')
            ->leftJoin(DB::raw('(SELECT product_id, AVG(rating) as avg_rating FROM reviews GROUP BY product_id) as avg_reviews'), 'products.id', '=', 'avg_reviews.product_id')
            ->leftJoin(DB::raw('(SELECT product_id, COUNT(*) as order_items FROM order_items GROUP BY product_id) as ordered'), 'products.id', '=', 'ordered.product_id')
            ->orderByRaw('(COALESCE(clicked.clicks, 0) + COALESCE(searched.searches, 0) + COALESCE(filtered.filters, 0) + COALESCE(ordered.order_items, 0)) DESC')
            ->orderByDesc('avg_reviews.avg_rating')
            ->with('reviews')->where('status',1)
            ->take(10) // Change this to the desired number of trending products
            ->get();

        
        $topSalesWithDiscount = Product::select('products.*')
            ->leftJoin(DB::raw('(SELECT product_id, SUM(quantity) as total_quantity FROM order_items GROUP BY product_id) as sold'), 'products.id', '=', 'sold.product_id')
            ->where('products.discount', '>', 0)
            ->orderByDesc(DB::raw('COALESCE(sold.total_quantity, 0)'))
            ->orderByDesc(DB::raw('(products.discount / products.price) * 100'))
            ->with('reviews')->where('status',1)
            ->take(10) 
            ->get();
        $Plantsproducts = Product::whereHas('category.parent', function ($query) {
            $query->where('id', 1);
        })
            ->with('images', 'plantInfo')
            ->select('*', DB::raw('(discount / price) * 100 as discount_percentage'))
            ->orderByDesc('discount_percentage') 
            ->with('reviews')->where('status',1)
            ->take(10) 
            ->get();

        $Accessoriesproducts = Product::whereHas('category.parent', function ($query) {
            $query->where('id', 2);
        })
            ->with('images', 'plantInfo')
            ->select('*', DB::raw('(discount / price) * 100 as discount_percentage'))
            ->orderByDesc('discount_percentage')
            ->with('reviews')->where('status',1) 
            ->take(10) 
            ->get();

            $user = Auth::user(); // Assuming you have authentication set up

        if ($user) {
            // Retrieve the user's wishlist items
            $wishlistItems = $user->wishlistItems()->pluck('product_id')->toArray();

            // Add a flag to each product indicating whether it's in the wishlist
            foreach ($trendingProducts as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
            foreach ($topSalesWithDiscount as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
            foreach ($Plantsproducts as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
            foreach ($Accessoriesproducts as $product) {
                $product->in_wishlist = in_array($product->id, $wishlistItems);
            }
        }
        
        return view('welcome', compact('Accessoriesproducts', 'Plantsproducts', 'plantCategory', 'accessortCategory', 'trendingProducts', 'topSalesWithDiscount'));
    }
}
