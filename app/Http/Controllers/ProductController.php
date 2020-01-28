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
}
