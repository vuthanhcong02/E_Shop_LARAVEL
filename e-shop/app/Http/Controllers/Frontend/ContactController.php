<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('Frontend.contact.index');
    }
    public function postFeedback(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        // dd($data);
        // Gửi email thông báo
        Mail::to('congvtc02@gmail.com')->send(new \App\Mail\FeedbackMail($data));
    
        return redirect('/contact')->with('success', 'Your feedback has been sent successfully.');
    }
}