<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    // public function index()
    // {
    //       $comments=Comment::get();
    //         // dd($comments);
    //     // return view ('/blog_details',compact('$blog->comments'));
    // }

    
    public function store(Blog $blog)
    {
        Comment::create([
            'blog_id' => $blog->id,
            'name' => request('name'),
            'email' => request('email'),
            'usercomment' => request('usercomment'),
        ]);

        return back();

    }

    
}
