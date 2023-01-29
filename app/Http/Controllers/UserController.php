<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function about()
    {
        return view('front.about');
    }
    public function contactUs()
    {
        return view('front.contactus');
    }
    public function certificates()
    {
        return view('front.certificates');
    }
    public function prodcustDetails($id)
    {
        return view('front.viewproduct');
    }
}
