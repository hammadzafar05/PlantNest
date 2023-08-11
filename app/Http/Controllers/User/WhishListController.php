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
        $wishlist = WishlistItem::where('user_id', $userId)->get();
        return view('pages.wishlist.index',compact('wishlist'));
        
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
            return response()->json(['message' => 'Item added to wishlist', 'wishlistItem' => $wishlistItem]);
        }

        return response()->json(['message' => 'Item is already in the wishlist']);
    }

    public function removeFromWishlist($id)
    {
        $userId = Auth::user()->id;

        $wishlistItem = WishlistItem::where('user_id', $userId)
            ->where('product_id', $id)
            ->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return response()->json(['message' => 'Item removed from wishlist']);
        }

        return response()->json(['message' => 'Item not found in wishlist'], 404);
    }
}
