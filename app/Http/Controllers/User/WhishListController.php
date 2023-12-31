<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WishlistItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhishListController extends Controller
{

    public function index()
    {
        $userId = Auth::user()->id;
        $wishlistItems = WishlistItem::with('product')->where('user_id', $userId)->get();
        return view('pages.wishlist.index', compact('wishlistItems'));
    }
    // public function wishlist()
    // {
    //     $userId = Auth::user()->id;
    //     $wishlist = WishlistItem::where('user_id', $userId)->get();
    //     return response()->json(['message' => ' wishlist Items Fetched', 'wishlist' => $wishlist]);
    // }
    public function addToWishlist($id)
    {
        $userId = Auth::user()->id;

        // Check if the item is already in the wishlist
        $existingItem = WishlistItem::where('user_id', $userId)
            ->where('product_id', $id)
            ->first();

        if (!$existingItem) {
            $wishlistItem = new WishlistItem();
            $wishlistItem->user_id = $userId;
            $wishlistItem->product_id = $id;
            $wishlistItem->save();
            $count = WishlistItem::where('user_id', $userId)
                ->count();
            return response()->json(['message' => 'Product added to the wishlist', 'wishlistItem' => $wishlistItem, 'count' => $count,'action'=>'1']);
        }
        else{
            $existingItem->delete();

        }
        $count = WishlistItem::where('user_id', $userId)
            ->count();

        return response()->json(['message' => 'Product removed from wishlist', 'count' => $count,'action'=>'0']);
    }

    public function removeFromWishlist($id)
    {
        $userId = Auth::user()->id;

        $wishlistItem = WishlistItem::where('user_id', $userId)
            ->where('product_id', $id)
            ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            $count = WishlistItem::where('user_id', $userId)
                ->count();
            return response()->json(['message' => 'Product removed from wishlist', 'count' => $count]);
        }

        return response()->json(['message' => 'Product not found in wishlist'], 404);
    }
}
