<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CategoryModel;

class CategoryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(Request $request)

   {

       $input = $request->all();

       if($request->get('search')){

           $Category = CategoryModel::where("name", "LIKE", "%{$request->get('search')}%")

               ->paginate(5);      

       }else{

      $Category = CategoryModel::paginate(5);

       }
       return view('category.index',compact('Category'));

   }

   public function store(Request $request)
   {
      $this->validate($request, [
          'name' => 'required',
          'active' => 'required'
      ]);
      $input = $request->all();
      CategoryModel::create($input);
      Session::flash('flash_message', 'Category successfully added!');
      return redirect()->back();
   }

   public function edit($id)
   {
       $Category = CategoryModel::findOrFail($id);
       return view('category.edit',compact('Category'));
   }

   public function update(Request $request,$id)
   {
      $Category = CategoryModel::findOrFail($id);
      $this->validate($request, [
          'name' => 'required',
          'active' => 'required'
      ]);
      $input = $request->all();
      $Category->fill($input)->save();
      Session::flash('flash_message', 'Category successfully updated!');
      return redirect()->back();

   }

   public function destroy($id)

   {
      $Category = CategoryModel::findOrFail($id);
      $Category->trashed();
      Session::flash('flash_message', 'Category successfully deleted!');
      return redirect()->route('category.index');
   }
}




   
