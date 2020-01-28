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
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'imageOne' => ['required', 'image'],
            'imageTwo' => ['image'],
            'height' => '',
            'width' => '',
            'price' => '',
            'color' => '',
            'sold' => boolean
        ]);

        $imagePath = request('imageOne')->store('uploads', 'public');
        $imagePath2 = request('imageTwo')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        // The above section is an image middleware which automatically resizes the original image to a square to fit the Instagram model. 
        $image->save();

        products()->create([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'imageOne' => $imagePath,
            'imageTwo' => $imagePath2,
            'height' => $data['height'],
            'width' => $data['width'],
            'color' => $data['color'],
            'sold' => $data['sold']
        ]);


        // dd(request()->all());
        return redirect('/'); 
    }
}
