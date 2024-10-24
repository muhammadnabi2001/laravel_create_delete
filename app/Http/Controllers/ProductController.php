<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $models=Product::all();
        return view('product',['models'=>$models]);
    }
    public function createproduct()
    {
        $models=category::all();
        return view('createproduct',['models'=>$models]);
    }
    public function addproduct(Request $request)
    {
        //dd($request);
        $request->validate(['name'=>'required',
        'category_id'=>'required',
        'count'=>'required',
        'price'=>'required']);
        $product=new Product();
        $product->name=$request->name;
        $product->category_id=$request->category_id;
        $product->price=$request->price;
        $product->count=$request->count;
        $product->save();
        return redirect('/product');
    }
    public function delete(int $id)
    {
        //dd(123);
        $model=Product::find($id);
        $model->delete();
        return redirect('/product')->with('delete',"Ma'lumot o'chirildi");

    }
    public function detail(int $id)
    {
        $models=Product::find($id);
        //dd($models);
        return view('detailproduct',['models'=>$models]);
    }
}
