<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalController extends Controller
{
    public function aboutUs(){

        return view('about');
    }

    public function contactUs(){
        
        return view('contact');
    }
}
