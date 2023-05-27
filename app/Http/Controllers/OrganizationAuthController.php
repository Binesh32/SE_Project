<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationAuthController extends Controller
{
    public function organizationsignup(){
        return view('frontend.auth.organizationSignUp' );
        }

        public function orgnizationlogin(){
            return view('frontend.auth.login' );
            }
}
