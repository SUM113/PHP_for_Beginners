<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
//    dd(request('search'));

        return view('posts',[
            'posts'=>Post::latest()->filter(request(['search']))->get(),
        ]);

    }



    public function show(Post $post)
    {
        return view("post",[
            'posts'=>$post,
        ]);

    }
}
