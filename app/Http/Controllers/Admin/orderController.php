<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $_orders=Order::with('user')->orderBy('orders.id','desc')->get();
        return view('admin.pages.orders_list',['_orders'=>$_orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
    public function orderStatusChange($id,$status)
    {
        $order=Order::find($id);
        $order->status=$status;
        if(!$order->save())
        {
            return redirect()->back()->with('error','something went wrong');
        }
        return redirect()->back()->with('success','Order Status Updated Successfully');
    }
}
