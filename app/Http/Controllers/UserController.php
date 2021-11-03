<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function orderPage(){
        $orders = Order::select('orders.*','users.name','users.email','pizzas.pizza_name')
                        ->join('users','users.id','orders.user_id')
                        ->leftJoin('pizzas','pizzas.id','orders.pizza_id')
                        ->orderBy('orders.id','desc')
                        ->get();
       return view('order.orderList')->with(['order' => $orders]);
    }
}
