<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'post_comment'=>'required|min:12'
        ]);

        if(auth()->check()){
            $comment= new Comment();
            $comment->user_id=auth()->id();
            $comment->post_id=$post->id;
            $comment->body=$_GET['post_comment'];
            $comment->save();

            return redirect()->back()->with('success',"Comment posted ✌✌✌✌✌✌");
        }else
            return redirect()->back()->with('success', "To POST a Comment.please LogIn 😁😁😁")->withInput();





    }
}
