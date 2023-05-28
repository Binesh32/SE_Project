<?php

namespace App\Http\Controllers;

use App\Models\CreatePost;
use Illuminate\Http\Request;

class inboxController extends Controller
{
    public function inboxDataPost(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'message' => 'required',
            'email' => 'required',

        ]);
        // dd($request);

        $create_list = new CreatePost();
        $create_list->title = $request->input('name');
        $create_list->message = $request->input('message');
        $create_list->waste_type = $request->input('email');
        $create_list->save();

        return redirect()->back()->with('message', 'added successfully');
    }
}
