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
        $products = Product::latest()->paginate(25);
    
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

 
        // return redirect()->to('/');
    } 

    public function destroy($id){

        $res=Product::where('id', $id)->delete();
        if ($res){
          $data=[
          'status'=>'1',
          'msg'=>'success'
        ];
        }else{
          $data=[
          'status'=>'0',
          'msg'=>'fail'
        ];
        // return response()->json($data);
        return redirect()->to('/');
    }    
    }

    public function update(){
        
        
        $productId = request('id');
        // dd($productId);
        $product = Product::where('id', $productId)->first();  
         
        $product->update(request()->all());
      
        // $product-> name = request('name') || $product-> name ;
        // $product-> description = request('description') || $product-> description;
        // $product-> imageOne = request()->input('imageOne') || $product-> imageOne;
        // $product-> imageTwo = request()->input('imageTwo') || $product-> imageTwo;
        // $product-> price = request()->input('price') || $product-> price;
        // $product-> height = request()->input('height') || $product-> height;
        // $product-> width = request()->input('width') || $product-> width;
        // $product-> color = request()->input('color') || $product-> color;
        // $product-> sold = request()->input('sold') || $product-> sold;

        // $product-> save();
    
    }

}