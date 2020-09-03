<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function menu(){
        $products=Product::get();
        return view('products',[
            'products'=>$products
        ]);
    }
    
    function price(){
        $products=Product::where('price','>',100)->get();
        return view('price',[
            'products'=>$products
        ]);
    }
}
