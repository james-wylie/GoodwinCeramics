<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::latest()->paginate(25);
    
        return $cartItems;
    }

    // When you click on the cart item you want to go back to the view product page.
    // public function show(\App\Product $product)
    // {
    //     return $product;
    // }
}
