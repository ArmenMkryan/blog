<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }
    public function store(Request $request)
    {   $this->validate($request,[
        'title'=>'required|min:6',
        'description'=>'required|min:3|max:100'
        ]

    );

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}

