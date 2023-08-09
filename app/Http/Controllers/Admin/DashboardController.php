<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // dashboard layout
    public function index(){
        return view('admin.layouts.app');
    }
    // admin dashboard index 
    public function adminDashboard(){
        return view('admin.pages.dashboard');
    }
}
