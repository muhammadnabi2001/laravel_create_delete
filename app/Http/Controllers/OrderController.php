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
}
