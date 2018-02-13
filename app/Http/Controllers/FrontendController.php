<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.partials.home');
    }
    public function contact()
    {
        return view('frontend.partials.contact');
    }
    public function payment()
    {
        return view('frontend.partials.payment');
    }
    public function about()
    {
        return view('frontend.partials.pages.about');
    }
}

