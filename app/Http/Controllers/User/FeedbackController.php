<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('pages.feedback.index');
    }

    public function submit_feedback(request $request)
    {
        ContactForm::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message
            ]
        );

        $response="Your Feedback has been Successfully Submitted";

        return redirect()->back()->with('success',$response);

    }
}
