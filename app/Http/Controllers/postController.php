<?php

namespace App\Http\Controllers;

use App\Models\CreatePost;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function createpost()
    {
        return view('backend.allpost.createPost');
    }
    public function usermypost()
    {
        return view('frontend.function.usermypost');
    }
    public function commentDataPost(Request $req)
    {
        $req->validate([

            'comment' => 'required',

        ]);
        $comment_list = new CreatePost();
        $comment_list->comment = $req->input('comment');
        $comment_list->save();
        return redirect()->back()->with('message', 'added successfully');
    }
    public function createDataPost(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'message' => 'required',
            'image' => 'required',
            'inputValue' => 'required',

        ]);
        // dd($request);

        $create_list = new CreatePost();
        $create_list->title = $request->input('title');
        $create_list->message = $request->input('message');
        $create_list->waste_type = $request->input('inputValue');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('backend/postUploads/', $filename);
            $create_list->image = $filename;
        } else {
            return $request;
            $create_list->image = '';
        }

        $create_list->save();

        return redirect()->back()->with('message', 'added successfully');
    }

    public function editPost($id)
    {
        $editPost = CreatePost::where('id', $id)->first();
        return view('backend.allpost.editPost', compact('editPost'));
    }



    public function updatePost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'message' => 'required',
            'image' => 'required',
            'waste_type' => 'required',


        ]);
        // dd($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('backend/postUploads/', $filename);
        }
        $blogs = CreatePost::Where('id', $id)->first();

        CreatePost::where('id', $id)->update([
            'title' => $request->title ? $request->title : $blogs->title,
            'message' => $request->message ? $request->message : $blogs->message,
            'waste_type' => $request->waste_type ? $request->waste_type : $blogs->waste_type,
            'image' => $request->hasFile('image') ? $filename : $blogs->image,
        ]);


        return redirect('/postlist')->with('message', 'Offer updated successfully');
    }
}
