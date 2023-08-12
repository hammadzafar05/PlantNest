<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //get all contacts
    public function contact()
    {
        $contacts=ContactForm::get();
        return view('admin.pages.contactmessages',['_contacts'=>$contacts]);
    }
    //get all feedbacks
    public function feedback()
    {
        $feedbacks=ContactForm::get();
        return view('admin.pages.feedback',['_feedbacks'=>$feedbacks]);
    }
}
