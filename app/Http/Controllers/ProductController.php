<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::paginate(5);
    
        return $products;
    }

    public function show(\App\Product $product)
    {
        return $product;
    }

    public function store()
    {  
        // dd(request()->all());

        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'imageOne' => 'required',
            'imageTwo' => '',
            'price' => '',
            'height' => '',
            'width' => '',
            'color' => '',
            'sold' => '',
            ]);

        // $imagePath = request('imageOne')->store('uploads', 'public');
        // $imagePath2 = request('imageTwo')->store('uploads', 'public');

        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        // // The above section is an image middleware which automatically resizes the original image to a square to fit the Instagram model. 
        // $image->save();
        Product::create($data);


        // dd(request()->all());
        return redirect('/'); 
    }
}
