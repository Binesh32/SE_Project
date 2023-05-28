<?php

namespace App\Http\Controllers;
use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function usersignup()
    {
        return view('frontend.auth.userSignUp');
    }

    public function userlogin()
    {
        return view('frontend.auth.userLogin');
    }

    public function usersRegister(Request $request)
    {
        $request->validate([
            'billing_first_name' => 'required',
            'billing_last_name' => 'required',
            'billing_state_1' => 'required',
            'billing_address' => 'required',
            'billing_email' => 'required|email',
            'billing_phone' => 'required',
            'billing_state_2'=> 'required',
            'billing_password' => ['required', 'min:6'],
        ]);

        $customerSuccess = UserAdmin::create([
            'First_Name' => $request->billing_first_name,
            'Last_Name' => $request->billing_last_name,
            'Gender' => $request->billing_state_1,
            'Address' => $request->billing_address,
            'email' => $request->billing_email,
            'PhoneNumber' => $request->billing_phone,
            'State/Province' =>$request->billing_state_2,
            'password' => Hash::make($request->billing_password)

        ]);
        if ($customerSuccess) {
            return redirect('/userSignIn')->with('message', 'signed Up successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid Credential!!');
        }

    }

    public function UserSignIn(Request $req)
    {
        $req->validate([
            'email' => 'required|email',

        ]);

        $customer = UserAdmin::where('email', $req->email)->first();
        if ($customer) {
            $credentials = [
                'email' => $req->email,
                'password' => $req->password,
            ];
            if (Auth::guard('useradmin')->attempt($credentials)) {
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
        Auth::guard('useradmin')->logout();
        return redirect ('/');
    }

}
