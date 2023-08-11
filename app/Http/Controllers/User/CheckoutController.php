<?php


namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){

        $userId = auth()->user()->id;

        $user = User::with(['details'])->find($userId);

        $cartItems = CartItem::with('product')->where('user_id', $userId)->get();

        return view('pages.checkout.index',compact('user','cartItems'));
    }

    public function submit_checkout(Request $request){
        
        $order = Order::create([
            'user_id'=>auth()->user()->id,
            'total_amount'=>$request->total_amount,
            'status'=>'pending'
        ]);

        $cartItems = CartItem::with('product')->where('user_id', auth()->user()->id)->get();

        foreach ($cartItems as $item) {
            $orderItems = OrderItem::create([
                'user_id'=>auth()->user()->id,
                'order_id'=>$order->id,
                'product_id'=>$item->product_id,
                'quantity'=>$item->quantity,
                'price'=>$item->quantity * $item->product->price
            ]);
        }

        //Clear Cart
        CartItem::where('user_id',auth()->user()->id)->delete();

        return redirect()->back()->with('success','Your Order Has Been Placed Successfully');


    }
}
