<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function service(){

        $products = \App\Product::orderBy('average_rating', 'desc')->get();
        $recommendedProducts = $products->take(4);
        $setting = \App\Setting::findOrFail(1);

        return view('info.service', compact('recommendedProducts', 'setting'));
    }

    public function aboutUs(){

        $products = \App\Product::orderBy('average_rating', 'desc')->get();
        $recommendedProducts = $products->take(4);
        $setting = \App\Setting::findOrFail(1);

        return view('info.about_us', compact('recommendedProducts', 'setting'));
    }

    public function contact(){
        $setting = \App\Setting::findOrFail(1);
        return view('info.contact', compact('setting'));
    }

    public function faq(){
        $setting = \App\Setting::findOrFail(1);
        return view('info.faq', compact('setting'));
    }

}
