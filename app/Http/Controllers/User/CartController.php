<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('product')->where('user_id', Auth::user()->id)->get();
        return view('pages.cart.index', compact('cartItems'));
    }
    public function add($id, Request $request)
    {
        $userId = Auth::user()->id;

        // Check if the cart item already exists for the user and product
        $existingCartItem = CartItem::where('user_id', $userId)
            ->where('product_id', $id)
            ->first();

        if ($existingCartItem) {
            // If the cart item exists, increment the quantity
            $existingCartItem->quantity += $request->quantity;
            $existingCartItem->save();

            return response()->json(['message' => 'Quantity updated', 'cartItem' => $existingCartItem]);
        }

        // If the cart item doesn't exist, create a new one
        $cartItem = new CartItem();
        $cartItem->user_id = $userId;
        $cartItem->product_id = $id;
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Added to cart', 'cartItem' => $cartItem]);
    }
    public function updateQuantity($id,Request $request){
        $cartItem=CartItem::find($id);
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Quantity updated', 'cartItem' => $cartItem]);
    }
    
}
