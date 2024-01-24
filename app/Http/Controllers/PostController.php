<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
//    dd(request('search'));

        return view('posts.index',[
            'posts'=>Post::latest()->filter(request(['search','category','user']))->paginate(5),

        ]);

    }

    public function show(Post $post): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view("posts.show",[
            'posts'=>$post,
        ]);

    }

    public function PostByAuthor(User $user){
        return view('posts.index',[
            'posts'=>$user->post,
        ]);
    }
}
