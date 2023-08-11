<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(){
        $cartItems = CartItem::with('product')->where('user_id', Auth::user()->id)->get();
        $count = CartItem::with('product')->where('user_id', Auth::user()->id)->count();

        return response()->json(['message' => 'success', 'cartItem' => $cartItems,'count'=>$count]);

    }
    public function index()
    {
        $cartItems = CartItem::with('product')->where('user_id', Auth::user()->id)->get();
        return view('pages.cart.index', compact('cartItems'));
    }
    public function add( Request $request)
    {
        $userId = Auth::user()->id;

        // Check if the cart item already exists for the user and product
        $existingCartItem = CartItem::where('user_id', $userId)
            ->where('product_id',$request->product_id)
            ->first();

        if ($existingCartItem) {
            // If the cart item exists, increment the quantity
            $existingCartItem->quantity += $request->quantity;
            $existingCartItem->save();

            return response()->json(['message' => 'Product Quantity updated in the cart', 'cartItem' => $existingCartItem]);
        }

        // If the cart item doesn't exist, create a new one
        $cartItem = new CartItem();
        $cartItem->user_id = $userId;
        $cartItem->product_id = $request->product_id;
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Product Added to Cart Successsfully', 'cartItem' => $cartItem]);
    }
    public function updateQuantity(Request $request){
        $cartItem=CartItem::find($request->id);
        // return  response()->json($request->id);
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Product Quantity updated in the cart', 'cartItem' => $cartItem]);
    }
    public function remove(Request $request){
        $cartItem = CartItem::find($request->id);
        
        if (!$cartItem) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }
        
        $cartItem->delete();
        
        return response()->json(['message' => 'Cart item removed'], 200);
    }
    
}
