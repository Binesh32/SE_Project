<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function usersignup(){
        return view('frontend.auth.userSignUp' );
        }

        public function userlogin(){
            return view('frontend.auth.login' );
            }
}
