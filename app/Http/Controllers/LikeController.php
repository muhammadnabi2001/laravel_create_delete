<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like()
    {
        $models=like::all();
        return view('/like',['models'=>$models]);
    }
    public function delete(int $id)
    {
        //dd(123);
        $model=like::find($id);
        $model->delete();
        return redirect('/like')->with('delete',"Ma'lumot o'chirildi");

    }
}
