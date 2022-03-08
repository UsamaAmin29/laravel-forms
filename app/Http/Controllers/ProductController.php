<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {
       return view('frontend.list-product');
   }

   public function add()
   {
       return view('frontend.add-product');
   } 
   
   public function insert(request $request)
   {
       $product = new Product();
       $product->name = $request->name;
       $product->fname = $request->input('fname');
       $product->address = $request->input('address');
       $product->phone = $request->input('phone');
       $product->email = $request->input('email');
       $product->password = $request->input('password');
       $product->save();
       return redirect('/product')->with('status','Product Added Successfully');
   }
}
