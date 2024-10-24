<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function posts()
    {
        $models = post::all();
        //dd($posts);
        return view('/posts', ['models' => $models]);
    }
    public function create()
    {
        $models=category::all();
        return view('createpost',['models'=>$models]);
    }
    public function createpost(Request $request)
    {
        //dd($request);
        $request->validate([
            'title' => 'Required|max:255',
            'body' => 'Required|max:255',
            'category_id' => 'Required',
            'like' => 'Required',
            'dislike' => 'Required'
        ],['title.required'=>"Titleni to'ldiring",
    'body.required'=>"Bodyni to'ldiring",
'category_id.required'=>"Category ni to'ldiring"]);
        $post = new post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->like = $request->like;
        $post->dislike = $request->dislike;
        $post->save();
        return redirect('/post')->with('success',"Ma'lumot muvvafaqiyatli qo'shildi");
    }
    public function delete(int $id)
    {
        //dd(123);
        $model=post::find($id);
        $model->delete();
        return redirect('/post')->with('delete',"Ma'lumot o'chirildi");

    }
    public function detail(int $id)
    {
        $models=post::find($id);
        //dd($models);
        return view('detailpost',['models'=>$models]);
    }

}
