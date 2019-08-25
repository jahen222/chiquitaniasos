<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(20);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {

        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $blog = new Blog;

        if(isset($input['image'])){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/blogs'), $imageName);
            $blog->path_to_image = '/images/blogs/'.$imageName;
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();

        return back();
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $input = $request->all();
        if(isset($input['image'])){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/blogs'), $imageName);
            $blog->path_to_image = '/images/blogs/'.$imageName;
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->update();

        return back();
    }


    public function destroy($id)
    {
        Blog::destroy($id);

        $blogs = Blog::paginate(20);

        return view('admin.blogs.index', compact('blogs'));
    }
}
