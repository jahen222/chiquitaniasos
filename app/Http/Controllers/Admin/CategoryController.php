<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(20);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        if(isset($input['image'])){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/icons'), $imageName);
            $category = new Category;
            $category->name = $request->name;
            $category->path_to_image = '/images/icons/'.$imageName;
            $category->save();
        }
        else{
            $category = new Category;
            $category->name = $request->name;
            $category->save();
        }

        return back();
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $input = $request->all();
        if(isset($input['image'])){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/icons'), $imageName);
            $category->name = $request->name;
            $category->path_to_image = '/images/icons/'.$imageName;
            $category->update();
        }
        else{
            $category->name = $request->name;
            $category->update();
        }

        return back();
    }


    public function destroy($id)
    {
        Category::destroy($id);

        $categories = Category::paginate(20);

        return view('admin.categories.index', compact('categories'));
    }
}
