<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact.index');
    }

}
