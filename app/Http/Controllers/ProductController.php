<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        // The above section is an image middleware which automatically resizes the original image to a square to fit the Instagram model. 
        $image->save();

        auth()->user()->posts()->create([
            // 
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);


        // dd(request()->all());
        return redirect('/profile/' . auth()->user()->id);
        // redirects to user profile id
    }
}
