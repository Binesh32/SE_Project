<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    return view('frontend.home.index' );
    }
    public function blogs(){
    return view('frontend.home.blogs' );
    }
    public function about(){
    return view('frontend.home.aboutUs' );
    }
    public function post(){
    return view('frontend.home.post' );
    }
}
