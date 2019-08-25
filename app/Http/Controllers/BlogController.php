<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Blog::orderBy('id', 'desc')->get();
        $setting = \App\Setting::findOrFail(1);

        return view('blog.index', compact('posts', 'setting'));
    }

    public function show($id){
        $post = Blog::find($id);
        $comments = $post->comments;
        $setting = \App\Setting::findOrFail(1);


        return view('blog.show', compact('post', 'comments', 'setting'));
    }
}
