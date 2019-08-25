<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;

class IndexController extends Controller
{
    public function index(){

        $categories = \App\Category::all();
        $products = \App\Product::orderBy('average_rating', 'desc')->get();
        $posts = \App\Blog::orderBy('id', 'desc')->get()->take(6);
        $recommendedProducts = $products->take(6);

        return view('main_page', compact('categories', 'recommendedProducts', 'posts'));
    }

    public function home(){

        $categories = \App\Category::all();
        $products = \App\Product::orderBy('average_rating', 'desc')->get();
        $posts = \App\Blog::orderBy('id', 'desc')->get()->take(6);
        $events = \App\Event::orderBy('id', 'desc')->get()->take(3);
        $setting = \App\Setting::findOrFail(1);
        $recommendedProducts = $products->take(3);

        $subcategory_id_1 = Subcategory::find($setting->subcategory_id_1);
        $subcategory_id_2 = Subcategory::find($setting->subcategory_id_2);
        $subcategory_id_3 = Subcategory::find($setting->subcategory_id_3);
        $subcategory_id_4 = Subcategory::find($setting->subcategory_id_4);

        return view('home', compact('categories', 'recommendedProducts', 'posts', 'events', 'setting', 'subcategory_id_1', 'subcategory_id_2', 'subcategory_id_3', 'subcategory_id_4'));
    }
}
