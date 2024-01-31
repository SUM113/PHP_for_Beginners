<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function create(){
        return view('posts.post-form');
    }
    public function store(Post $post){
//        dd(request()->all());
        try {
            request()->file('thumbnail')->store('thumbnails');
            $post->create([
                'user_id'=> auth()->user()->id,
                'excerpt'=> request('excerpt'),
                'slug'=> request('slug'),
                'title'=> request('title'),
                'body'=> request('body'),
                'thumbnail'=>request()->file('thumbnail')->store('thumbnails'),
                'category_id'=> request('category_id'),
            ]);

            Return redirect()->back()->with('success','Blog Published successfully');
        }catch(\Exception $e){
            throw ValidationException::withMessages(['submit'=>'Error Encountered while creating Blog Post.']);
            Return redirect(request()->routeIs('home'))->with('success','Request Unsuccessful.. Try Again');

        }

    }
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
