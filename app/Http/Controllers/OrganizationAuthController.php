<?php

namespace App\Http\Controllers;

use App\Models\OrganizationsAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrganizationAuthController extends Controller
{
    public function organizationsignup(){
        return view('frontend.auth.organizationSignUp' );
        }

        public function organizationlogin(){
            return view('frontend.auth.organizationLogin' );
            }

              public function adminsignup()
    {
        return view('frontend.auth.adminSignUp');
    }

    public function adminlogin()
    {
        return view('frontend.auth.login');
    }

    public function organizationRegister(Request $request)
    {
        $request->validate([
            'billing_company' => 'required',
            'billing_address_1' => 'required',
            'billing_email' => 'required|email',
            'billing_phone' => 'required',
            'billing_state'=> 'required',
            'billing_password' => ['required', 'min:6'],
        ]);

        $customerSuccess = OrganizationsAdmin::create([
            'Organization_Name' => $request->billing_company,
            'Address' => $request->billing_address_1,
            'PhoneNumber' => $request->billing_phone,
            'email' => $request->billing_email,
            'State/Province' =>$request->billing_state,
            'password' => Hash::make($request->billing_password)

        ]);
        if ($customerSuccess) {
            return redirect('/organizationSignIn')->with('message', 'signed Up successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid Credential!!');
        }

    }

    public function organizationSignIn(Request $req)
    {
        $req->validate([
            'email' => 'required|email',

        ]);

        $customer = OrganizationsAdmin::where('email', $req->email)->first();
        if ($customer) {
            $credentials = [
                'email' => $req->email,
                'password' => $req->password,
            ];
            if (Auth::guard('organizationadmin')->attempt($credentials)) {
                return redirect('/');
            } else {
                return redirect()->back()->with('error', 'Invalid Credentials');
            }
        } else {
            return redirect()->back()->with('error', 'Email doesn"t Exist');
        }


    }
    public function logout()
    {

        Auth::guard('organizationadmin')->logout();
        return redirect ('/');
    }
}
