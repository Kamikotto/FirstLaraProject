<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home(){
        return view('home1');
    }

    public function about(){
        return view('about');
    }

    public function review(){
        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);
    }
    public function review_check(Request $request){
        $validate = $request->validate([
            'email' => 'required|min:4|max:25',
            'subject' => 'required|min:3|max:25',
            'message' => 'required|min:4|max:100',
        ]);
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();
        
        return redirect()->route('home');

    }

    public function visitors(){
        $visitorsy = new Contact();
        return view('visitors', ['visitorsy' => $visitorsy->all()]);
    }
    
}
