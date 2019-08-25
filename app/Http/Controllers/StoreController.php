<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){

        $categories = \App\Category::all();
        $products = \App\Product::orderBy('average_rating', 'desc');
        $recommendedProducts = $products->paginate(9);//$products->take(3);

        return view('store.index', compact('categories', 'recommendedProducts'));
    }
}
