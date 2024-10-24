<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Orders()
    {
        $models=Order::all();
        return view('/order', ['models'=> $models]);
    }
    public function delete(int $id)
    {
       // dd(123);
        $model=Order::find($id);
        $model->delete();
        return redirect('/order')->with("delete","Ma'lumot o'chirildi");

    }
}
