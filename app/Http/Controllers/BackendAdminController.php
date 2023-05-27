<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendAdminController extends Controller
{

    public function admindashboard(){
        return view('frontend.home.admindashboard' );
        }
    public function addblogs(){
        return view('backend.adminadd.addblogs' );
        }
    public function bloglist(){
        return view('backend.adminadd.bloglist' );
        }
    public function postlist(){
        return view('backend.adminadd.postlist' );
        }
    public function inboxlist(){
        return view('backend.adminadd.inboxlist' );
        }
     public function adminprofile(){
            return view('frontend.admin.adminprofile' );
     }
}
