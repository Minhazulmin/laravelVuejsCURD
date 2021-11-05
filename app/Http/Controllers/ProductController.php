<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $datas = Product::all()->toArray();
        return array_reverse($datas);
    }
   public function store(Request $request)
   {
      Product::create($request->all());

   }
   public function show($id)
   {
        $data  = Product::find($id);
        return response()->json($data);
   }
   public function update(Request $request,$id)
   {
       $data = Product::find($id);
       $data->update($request->all());

       return response()->json('Update successfully');
   }
   public function destroy($id)
   {
       $data = Product::find($id);
       $data->delete();

       return response()->json('successfully deleted');
   }

}
