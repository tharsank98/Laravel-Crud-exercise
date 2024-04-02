<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{


    public function index(){
        $categories =Category::get();
        return view('category.index',compact('categories'));

    }




    public function create(){
        return view('category.create');

      }




    public function store(Request $request){

        $request->validate([
            'name'=>'required|min:3|max:255|alpha',
            'description'=>'required|max:255|string',
            'is_active'=>'sometimes'

        ],[
            'name.required'=>'Product Name cannot be empty',
            'name.min'=>'Give atleast 3 character for product Name',
            'name.max'=>'Product Name must be 3 to 255 charecters',
            'description.requires'=>'Description must be required',
            'description.max:255'=>'Description must be within 255 characters',
            'description.string'=>'Description must be in String values',
            'is_active.required'=>'This field must be Required'
        ]);

            //method 1
         //Category::create($request->all());

              // method 2
        /*  Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'is_active'=>$request->is_active == true? 1:0,


         ]); */


              //method 3
           $category = new Category();
           $category->name=$request->input('name');
           $category->description=$request->input('description');
           $category->is_active = $request->has('is_active') ? 1 : 0;

           $category->save();


         return redirect('categories/create')->with('status','Category Created');

      }


      public function edit(int $id){
         $category = Category::findOrFail($id);

          //return $category;
          return view('category.edit', compact('category'));
        }





    public function update(Request $request ,int $id){
        $request->validate([
            'name'=>'required|min:3|max:255|alpha',
            'description'=>'required|max:255|string',
            'is_active'=>'sometimes'

        ],[
            'name.required'=>'Product Name cannot be empty',
            'name.min'=>'Give atleast 3 character for product Name',
            'name.max'=>'Product Name must be 3 to 255 charecters',
            'description.requires'=>'Description must be required',
            'description.max:255'=>'Description must be within 255 characters',
            'description.string'=>'Description must be in String values',
            'is_active.required'=>'This field must be Required'
        ]);

        $category = Category::findOrFail($id);

        if ($category) {
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->is_active = $request->has('is_active') ? 1 : 0;

            $category->save();
        }

      return redirect('categories')->with('status','Category updated Successfully');

    }



    public function destroy(int $id){
      $category =Category::findOrFail($id);
      $category->delete();

      return redirect('categories')->with('status','Category deleted Successfully');

    }


}
