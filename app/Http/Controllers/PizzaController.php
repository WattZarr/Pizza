<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaStoreRequest;

class PizzaController extends Controller
{
    public function addPizza(){
    return view('pizza.addPizzaPage');
    }

    public function createPizza(PizzaStoreRequest $request){
        $path = $request->image->store('public/pizza');
        Pizza::create([
            'name' => $request->name,
            'description' => $request->description,
            'smallPrice' => $request->smallPrice,
            'mediumPrice' => $request->mediumPrice,
            'largePrice' => $request->largePrice,
            'catagory' => $request->catagory,
            'image' => $path,
        ]);

        return view('pizza.pizzaList');
    }
}
