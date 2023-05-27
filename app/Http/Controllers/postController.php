<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function createpost(){
        return view('backend.allpost.createPost' );
        }
    public function usermypost(){
        return view('frontend.function.usermypost' );
        }
}
