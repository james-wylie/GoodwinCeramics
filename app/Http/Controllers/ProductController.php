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
        
        // $data = request()->all();
    
       

        // $data->validate([
        //     'name'=> 'required',
        //     'description'=> 'required',
        //     'imageOne'=> 'required',
        //     'imageTwo'=>'required',
        //     'price'=> 'required',
        //     'height'=> 'required',
        //     'width'=> 'required',
        //     'color'=> 'required',
        //     'sold'=> 'required'
        // ]);
        
        
        $product = new Product;  
         
        $product-> name = request('name');
        $product-> description = request()->input('description');
        $product-> imageOne = request()->input('imageOne');
        $product-> imageTwo = request()->input('imageTwo');
        $product-> price = request()->input('price');
        $product-> height = request()->input('height');
        $product-> width = request()->input('width');
        $product-> color = request()->input('color');
        $product-> sold = request()->input('sold');

        $product-> save();

 
        return redirect('/products-list');
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
