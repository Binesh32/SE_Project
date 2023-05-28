<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{

    public function adminsignup()
    {
        return view('frontend.auth.adminSignUp');
    }

    public function adminlogin()
    {
        return view('frontend.auth.adminLogin');
    }

    public function adminRegister(Request $request)
    {
        $request->validate([
            'billing_first_name' => 'required',
            'billing_last_name' => 'required',
            'billing_state' => 'required',
            'billing_address_1' => 'required',
            'billing_email' => 'required|email',
            'billing_phone' => 'required',
            'billing_state_1'=> 'required',
            'billing_password' => ['required', 'min:6'],
        ]);

        $customerSuccess = Admin::create([
            'First_Name' => $request->billing_first_name,
            'Last_Name' => $request->billing_last_name,
            'Gender' => $request->billing_state,
            'Address' => $request->billing_address_1,
            'email' => $request->billing_email,
            'PhoneNumber' => $request->billing_phone,
            'State/Province' =>$request->billing_state_1,
            'password' => Hash::make($request->billing_password)

        ]);
        if ($customerSuccess) {
            return redirect('/adminSignIn')->with('message', 'signed Up successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid Credential!!');
        }

    }

    public function adminSignIn(Request $req)
    {
        $req->validate([
            'email' => 'required|email',

        ]);

        $customer = Admin::where('email', $req->email)->first();
        if ($customer) {
            $credentials = [
                'email' => $req->email,
                'password' => $req->password,
            ];
            if (Auth::guard('admin')->attempt($credentials)) {
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

        Auth::guard('admin')->logout();
        return redirect ('/');
    }

    public function editProfile($id){
        $editProfile=Admin::where('id',$id)->first();
        return view ('frontend.admin.editAdminProfile',compact('editProfile'));
    }



    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'billing_first_name' => 'required',
            'billing_last_name' => 'required',
            'billing_state' => 'required',
            'billing_address_1' => 'required',
            'billing_email' => 'required|email',
            'billing_phone' => 'required',
            'billing_state_1'=> 'required',
            'billing_password' => ['required', 'min:6'],
        ]);
        // dd($request);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('backend/profileUploads/', $filename);
        }
        $profile = Admin::Where('id',$id)->first();
        Admin::where('id',$id)->update([
            'First_Name' => $request->billing_first_name ? $request->billing_first_name : $profile->billing_first_name,
            'Last_Name' => $request->billing_last_name ? $request->billing_last_name : $profile->billing_last_name,
            'Gender' => $request->billing_state ? $request->billing_state : $profile->billing_state,
            'Address' => $request->billing_address_1 ? $request->billing_address_1 : $profile->billing_address_1,
            'email' => $request->billing_email ? $request->billing_email : $profile->billing_email,
            'PhoneNumber' => $request->billing_phone ? $request->billing_phone : $profile->billing_phone,
            'State/Province' => $request->billing_state_1 ? $request->billing_state_1 : $profile->billing_state_1,
            'password' => $request->billing_password ? Hash::make($request->billing_password): $profile->billing_password,
            'image' => $request->hasFile('image') ? $filename : $profile->image,
        ]);
        return redirect()->back()->with('message', 'Offer updated successfully');
    }

}
