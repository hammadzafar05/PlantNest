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

    public function submit_contact(request $request)
    {
        ContactForm::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message
            ]
        );

        $response="Successfully Submited Contact Form";

        return redirect()->back()->with('success',$response);

    }
}
