<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('pages.shop.index');
    }
    public function detail(){
        return view('pages.shop.detail');
    }
}
