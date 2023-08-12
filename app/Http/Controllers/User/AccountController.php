<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){

        $orders = Order::where('user_id',auth()->user()->id)->get();
        $userDetails = User::with(['details'])->find(auth()->user()->id);

        return view('pages.account.index',compact('orders','userDetails'));
    }

    public function update(Request $request){
        
        $user=User::find(Auth::user()->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->contact_number=$request->contact_number;
        $user->save();

        $profile=UserDetail::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
            'shipping_billing_address_1' => $request->shipping_billing_address_1,
            'shipping_billing_address_2' => $request->shipping_billing_address_2,
            'shipping_city' => $request->shipping_city,
            'shipping_country' => $request->shipping_country,
            'shipping_state' => $request->shipping_state,
            'shipping_zip_code' => $request->shipping_zip_code
            ]
        );

        $response="Profile Updated Successfully ";

        return redirect()->back()->with('success',$response);

    }

    function viewOrder($orderId){

        $orderDetails =  OrderItem::with(['order','product'])->where('order_id',$orderId)->get();

        return view('pages.order.details',compact('orderDetails'));
    }
}
