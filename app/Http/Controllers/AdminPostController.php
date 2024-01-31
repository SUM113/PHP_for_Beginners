<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\ValidationException;

class AdminPostController extends Controller
{

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

    public function create(){
        return view('posts.post-form');
    }

    public function show(Post $post){
        return view('admin.show-dashboard',[
           'posts'=>Post::all()
        ]);
    }

    public function destroy(Post $post){

//        Post::where('id',$post->id )->delete();
        $post->delete();
        return redirect()->back()->with('success','DELETED Successfully');
    }

    public function edit(Post $post){
        return view('admin.edit',[
            'post'=>$post
        ]);
    }
    public function update(Post $post){


        try {
            request()->file('thumbnail')->store('thumbnails');
            $post->update([
                'user_id'=> $post->user->id,
                'excerpt'=> request('excerpt'),
                'slug'=> request('slug'),
                'title'=> request('title'),
                'body'=> request('body'),
                'thumbnail'=>request()->file('thumbnail')->store('thumbnails'),
                'category_id'=> request('category_id'),
            ]);

            Return redirect('/')->with('success','Blog Updated successfully');
        }catch(\Exception $e){
            throw ValidationException::withMessages(['submit'=>'Error Encountered while updating Blog Post.']);
            Return redirect(request()->routeIs('home'))->with('success','Request Unsuccessful.. Try Again');

        }

    }

}
