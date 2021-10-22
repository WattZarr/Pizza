<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function addPizza(){
    return view('pizza.addPizzaPage');
    }
}
