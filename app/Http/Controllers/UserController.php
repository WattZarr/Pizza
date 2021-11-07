<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function orderPage(){
        $orders = Order::select('orders.*','users.name','users.email','pizzas.*')
                        ->join('users','users.id','orders.user_id')
                        ->leftJoin('pizzas','pizzas.id','orders.pizza_id')
                        ->orderBy('orders.id','desc')
                        ->get();
       return view('order.orderList')->with(['order' => $orders]);
    }

    public function userDashboard(){
        $pizzas = Pizza::latest()->get();
        return view('user.dashboard')->with('pizzas',$pizzas);
    }

    //pizza Details Page
    public function pizzaDetailsPage($id){
        $pizza = Pizza::where('id',$id)->get();
        return view('user.pizzaDetailsPage')->with('pizza',$pizza);
    }

    //order Pizza
    public function orderPizza(REQUEST $request){
        if($request->smallPizza == 0 && $request->mediumPizza == 0 && $request->largePizza == 0){
            return back()->with('message','You must al least order one pizza');
        }

        if($request->smallPizza < 0 || $request->mediumPizza < 0 || $request->largePizza < 0){
            return back()->with('message','Please Enter valid amount of pizza');
        }

        Order::create([
            'user_id' => auth()->user()->id,
            'pizza_id' => $request->pizza_id,
            'date' => $request->date,
            'time' => $request->time,
            'smallPizza' => $request->smallPizza,
            'mediumPizza' => $request->mediumPizza,
            'largePizza' => $request->largePizza,
            'body' => $request->body,
        ]);
        return back()->with('success','Your order is placed.');
    }
}
