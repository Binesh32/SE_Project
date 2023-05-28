<?php

namespace App\Http\Controllers;

use App\Models\AddBlogs;
use App\Models\Admin;
use App\Models\CreatePost;
use App\Models\InboxPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendAdminController extends Controller
{

    public function admindashboard()
    {
        return view('frontend.home.admindashboard');
    }
    public function addblogs()
    {
        return view('backend.adminadd.addblogs');
    }
    public function bloglist()
    {
        return view('backend.adminadd.bloglist');
    }
    public function postlist()
    {
        return view('backend.adminadd.postlist');
    }
    public function inboxlist()
    {
        return view('backend.adminadd.inboxlist');
    }
    public function adminprofile()
    {
        return view('frontend.admin.adminprofile');
    }

    public function blogDataPost(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'message' => 'required',
            'image' => 'required',

        ]);
        // dd($request);

        $blog_list = new AddBlogs();
        $blog_list->title = $request->input('title');
        $blog_list->message = $request->input('message');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('backend/blogsUploads/', $filename);
            $blog_list->image = $filename;
        } else {
            return $request;
            $blog_list->image = '';
        }

        $blog_list->save();

        return redirect()->back()->with('message', 'added successfully');
    }
    public function blogslist()
    {
        try {
            $user = Auth::guard('Admin')->user();
            if (!$user) {
                return redirect()->route('admin.signin');
            }

            $couponData = AddBlogs::select('title','message','image')
            ->where('id',$user->id)
            ->get();
            return view('backend.adminadd.bloglist', compact('couponData'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }
     public function inboxslist()
    {
        try {
            $inboxData = InboxPost::select('name','message','email')->get();
            return view('backend.adminadd.inboxlist', compact('inboxData'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }

    public function postelist()
    {
        try {
            $postData = CreatePost::select('title','message','image','waste_type')->get();
            return view('backend.adminadd.postList', compact('postData'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }

    public function adminsprofile()
    {
        try {
            $inboxData = Admin::select('name','message','email')->get();
            return view('backend.adminadd.inboxlist', compact('inboxData'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }
    public function editBlogs($id){
        $editBlogs=AddBlogs::where('id',$id)->first();
        return view ('backend.adminadd.editblogs',compact('editBlogs'));
    }



    public function updateBlogs(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'message' => 'required',
            'image' => 'required',


        ]);
        // dd($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('backend/blogsUploads/', $filename);

        }
        $blogs = AddBlogs::Where('id',$id)->first();

        AddBlogs::where('id',$id)->update([
            'title' => $request->title ? $request->title : $blogs->title,
            'message' => $request->message ? $request->message : $blogs->message,
            'image' => $request->hasFile('image') ? $filename : $blogs->image,

        ]);


        return redirect('/bloglist')->with('message', 'Offer updated successfully');
    }


}
