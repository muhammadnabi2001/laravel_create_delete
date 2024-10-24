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
}
