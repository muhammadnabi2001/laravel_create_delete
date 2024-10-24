<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Post;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryController extends Controller
{
    public function index()
    {
        $models=category::all();
        //dd($models);
        return view('index',['models'=>$models]);
    }
    public function create()
    {
        return view('create');
    }
    public function category(Request $request)
    {
        $request->validate(['name'=>'required|max:255'],['name.required'=>"nameni to'ldiring"]);
        $category=new category();
        $category->name=$request->name;
        $category->save();
        return redirect('/')->with('success',"Ma'lumot muvaffaqiyatli qo'shildi");
    }
    public function delete(int $id)
    {
        $model=category::find($id);
        $model->delete();
        return redirect('/')->with('delete',"Ma'lumot o'chirildi");

    }
    public function detail(int $id)
    {
        $models=category::find($id);
        //dd($models);
        return view('detailcategory',['models'=>$models]);
    }
}
