<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::paginate(20);

        return view('admin.subcategories.index', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.subcategories.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $subcategory = new Subcategory;
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();

        return back();
    }

    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Category::all();

        return view('admin.subcategories.edit', compact('subcategory'), compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->update();

        return back();
    }


    public function destroy($id)
    {
        Subcategory::destroy($id);

        $subcategories = Subcategory::paginate(20);

        return view('admin.subcategories.index', compact('subcategories'));
    }
}
