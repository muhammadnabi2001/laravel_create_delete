<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\post;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    public function comment()
    {
        $models=Comment::all();
        return view('comment',['models'=>$models]);
    }
    public function addcomment()
    {
        $models=post::all();
        return view('createcomment',['models'=>$models]);
    }
    public function createcomment(Request $request)
    {
       // dd($request);
        $request->validate(['body'=>'required',
    'post_id'=>'required']);
    $comment=new Comment();
    $comment->post_id=$request->post_id;
    $comment->body=$request->body;
    $comment->save();
    return redirect('/comment');
    }
    public function delete(int $id)
    {
        //dd(123);
        $model=Comment::find($id);
        $model->delete();
        return redirect('/comment')->with('delete',"Ma'lumot o'chirildi");

    }
}
