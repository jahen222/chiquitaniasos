<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Image;
use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $subcategories = Subcategory::all();

        return view('admin.products.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $subcategory = Subcategory::find($request->subcategory_id);
        $product = new Product;

        if(isset($input['image'])){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/thumbnails/'.$subcategory->name), $imageName);
            $product->path_to_thumbnail = '/images/thumbnails/'.$subcategory->name.'/'.$imageName;
        }

        $product->name = $request->name;
        $product->subcategory_id = $request->subcategory_id;
        $product->category_id = $subcategory->category->id;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->made_in = $request->made_in;
        $product->year = $request->year;
        $product->e_n_1 = $request->e_n_1;
        $product->e_d_1 = $request->e_d_1;
        $product->e_n_2 = $request->e_n_2;
        $product->e_d_2 = $request->e_d_2;
        $product->e_n_3 = $request->e_n_3;
        $product->e_d_3 = $request->e_d_3;
        $product->e_n_4 = $request->e_n_4;
        $product->e_d_4 = $request->e_d_4;
        $product->e_n_5 = $request->e_n_5;
        $product->e_d_5 = $request->e_d_5;
        $product->save();

        if(isset($input['galery_1'])){
            $image = new Image;
            $imageName = time().'.'.$request->file('galery_1')->getClientOriginalExtension();
            $request->galery_1->move(public_path('images/galleries/'.$subcategory->name), $imageName);
            $image->path_to_image = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->path_to_thumbnail = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->save();
            $product->images()->attach($image->id);
        }
        if(isset($input['galery_2'])){
            $image = new Image;
            $imageName = time().'.'.$request->file('galery_2')->getClientOriginalExtension();
            $request->galery_2->move(public_path('images/galleries/'.$subcategory->name), $imageName);
            $image->path_to_image = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->path_to_thumbnail = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->save();
            $product->images()->attach($image->id);
        }
        if(isset($input['galery_3'])){
            $image = new Image;
            $imageName = time().'.'.$request->file('galery_3')->getClientOriginalExtension();
            $request->galery_3->move(public_path('images/galleries/'.$subcategory->name), $imageName);
            $image->path_to_image = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->path_to_thumbnail = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->save();
            $product->images()->attach($image->id);
        }
        if(isset($input['galery_4'])){
            $image = new Image;
            $imageName = time().'.'.$request->file('galery_4')->getClientOriginalExtension();
            $request->galery_4->move(public_path('images/galleries/'.$subcategory->name), $imageName);
            $image->path_to_image = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->path_to_thumbnail = '/images/galleries/'.$subcategory->name.'/'.$imageName;
            $image->save();
            $product->images()->attach($image->id);
        }

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
       Product::destroy($id);

       $products = Product::paginate(10);

       return view('admin.products.index', compact('products'));
    }

    public function changeQuantity(Product $product, Request $request){

        if ($request->quantity >= 0 && $request->quantity <= 100){

            $product->quantity = $request->quantity;
            $product->save();
        }
        return back();
    }
}
