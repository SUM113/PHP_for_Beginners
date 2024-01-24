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
//            'posts'=>Post::latest()->filter(request(['search','category','user']))->paginate(5),// This is regular pagination with no links to the next page it willl wipeout all the filter if applied to the page.
            'posts'=>Post::latest()->filter(request(['search','category','user']))->paginate(5)->withQueryString(),// This is regular pagination with all the query string information to the next page.

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
