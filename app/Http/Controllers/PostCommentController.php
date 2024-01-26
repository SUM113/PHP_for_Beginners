<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {
        {{
            $post;
//            auth()->user()->;

            auth()->user()->name;
        }}

    }
}
