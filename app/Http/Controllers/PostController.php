<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
//    dd(request('search'));

        return view('posts',[
            'posts'=>Post::latest()->with('category')->filter(request(['search','category']))->get(),
            'category_selected'=> Category::where('slug',request('category'))->first(),
            'categories'=> Category::all()
        ]);

    }



    public function show(Post $post): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view("post",[
            'posts'=>$post,
            'categories'=> Category::all()
        ]);

    }
}
