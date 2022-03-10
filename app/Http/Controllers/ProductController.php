<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use DB;
use Redirect;

class ProductController extends Controller
{
   public function index(Request $request)
   {

    // search by name
    if($request->name){
        
        $product = DB::table('products')->where('name', "Like", "%".$request->name."%" )->get();
       
    }else{
        
        $product = DB::table('products')->get();
    }
         

    
   
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

   public function edit($id)
   {

    // dd($id);

    $product = Product::find($id);
    return view('frontend.edit-product', compact('product'));
   }
//    public function update(Product $request, $id)
//    {
//     Category::update([
//             'name' => $request->name,
//             'phone' => $request->phone,
//             'address' => $request->address,
//             'phone' => $request->phone,
//             'email' => $request->email,
//             'password' => $request->password
//         ]);
//         // return view('frontend.list-product', compact('product'));

//    }


public function update(Request $request)
{
    // dd($id);
    $product= product::find($request->id);
    $product->name = $request->name;
    $product->fname = $request->input('fname');
    $product->address = $request->input('address');
    $product->phone = $request->input('phone');
    $product->email = $request->input('email');
    $product->password = Hash::make('password');
    $product->save();
    
    return redirect()->route('home')
    ->with('success','updated successfully!');
    // DB::table('posts')->where('id', $id)->update(['title' => $title, 'content' => $content]);
}

public function delete($id)
{
    $product = product::findOrFail($id);
    
    $product->delete();
    return redirect()->route('home')
    ->with('success','deleted successfully!');
}
}
