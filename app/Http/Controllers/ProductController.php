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
            'name'=> 'required',
            'description'=> 'required',
            'imageOne'=> 'required',
            'imageTwo'=>'required',
            'price'=> 'required',
            'height'=> 'required',
            'width'=> 'required',
            'color'=> 'required',
            'sold'=> 'required'
        ]);
        
        
        
        $product = new Product;   
        $product-> name = $dat->input('name');
        $product-> description = $dat->input('description');
        $product-> imageOne = $dat->input('imageOne');
        $product-> imageTwo = $dat->input('imageTwo');
        $product-> price = $dat->input('price');
        $product-> height = $dat->input('height');
        $product-> width = $dat->input('width');
        $product-> color = $dat->input('color');
        $product-> sold = $dat->input('sold');

        $product-> save();

 
        return redirect('/');
    }

        // $data = request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'imageOne' => 'required',
        //     'imageTwo' => '',
        //     'price' => '',
        //     'height' => '',
        //     'width' => '',
        //     'color' => '',
        //     'sold' => '',
        //     ]);

        // Product::create($data);


        // return redirect('/'); 
    }
