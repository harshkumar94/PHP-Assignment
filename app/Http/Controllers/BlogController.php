<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('id','desc')->get();
        return view('blog.home', compact('blog'));
    }

    public function create()
    {
        return view('blog.createblog');
    }

    public function store()
    {
        $blog = new Blog();
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->save();
        return redirect('/blogs');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        $comments=Comment::where('blog_id',$id)->orderBy('created_at','DESC')->get();
        return view('blog.blog_details', compact('comments','blog'));
    }
}
