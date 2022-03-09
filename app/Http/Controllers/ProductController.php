<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use DB;
use Redirect;

class ProductController extends Controller
{
   public function index()
   {
     $product = DB::table('products')->get();
    //  dd($product);
   
       return view('frontend.list-product',compact('product'));
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
       $product->password = Hash::make('password');
       //    $product->password = $request->input('password');
         
       $product->save();
    //    return Redirect::back()->withErrors(['msg' => 'The Message']);
       return Redirect::back()->with('status','Product Added Successfully');
   }


}
