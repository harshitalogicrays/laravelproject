<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index(){
        $products=["product1","product2","product3","product4"];
        $data=compact('products');
        return view('products')->with($data);
    }    
}
