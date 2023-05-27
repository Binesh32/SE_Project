<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function adminsignup(){
        return view('frontend.auth.adminSignUp' );
        }
    public function adminlogin(){
        return view('frontend.auth.login' );
        }
   
}
