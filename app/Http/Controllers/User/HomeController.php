<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $plantCategory=Category::where('name','plant')->first();
        $accessortCategory=Category::where('name','accessories')->first();
        return view('welcome',compact('plantCategory','accessortCategory'));
    }
        
    
}
