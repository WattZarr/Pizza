<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PizzaStoreRequest;

class PizzaController extends Controller
{
    public function addPizza(){
    return view('pizza.addPizzaPage');
    }

    public function createPizza(PizzaStoreRequest $request){
        dd($request->all());
    }
}
