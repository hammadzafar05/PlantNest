<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard layout
    public function index(){
        $users=User::orderBy('id','desc')->limit(10)->get();
        $orders=Order::orderBy('id','desc')->with('user')->get();
        return view('admin.pages.dashboard',['_users'=>$users,'_orders'=>$orders]);
    }
}
