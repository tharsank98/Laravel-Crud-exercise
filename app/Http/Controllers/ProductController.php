<?php

namespace App\Http\Controllers;

use App\Models\Product;
//use App\Http\Requests\productFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    public function create(){
        return view('frontend.product-create');
    }

    //public function store(productFormRequest $request){

    public function store(Request $request){

           //Method 3

           //$request ->validated();

             //Method 2

         /*  $validator = Validator::make($request->all(),[
            'name'=>'required|min:3|max:255|alpha',
            'description'=>'required|max:255|string',
            'price'=>'required|numeric',
            'stock'=>'required|numeric'
          ],[
            'name.required'=>'Product Name cannot be empty',
            'name.min'=>'Give atleast 3 character for product Name',
            'name.max'=>'Product Name must be 3 to 255 charecters',

        ]);

          if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();

          } */



              //Method 1

         $request->validate([
            'name'=>'required|min:3|max:255|alpha',
            'description'=>'required|max:255|string',
            'price'=>'required|numeric',
            'stock'=>'required|numeric',

        ],[
            'name.required'=>'Product Name cannot be empty',
            'name.min'=>'Give atleast 3 character for product Name',
            'name.max'=>'Product Name must be 3 to 255 charecters',

        ]);
                 //M 1
        // $product = new Product();
        // $product ->name = $request -> name;
        // $product ->description = $request -> description;
        // $product ->price = $request -> price;
        // $product ->stock = $request -> stock;
        // $product->save();

             //M 2
        Product::create($request->all());

              //M 3
        // DB::table('products')->insert([
        //     'name'=>$request->name,
        //     'description'=>$request->description,
        //     'price'=>$request->price,
        //     'stock'=>$request->stock,
        //   ]);

        return redirect()->back()->with('status','Product Added');



    }
}
