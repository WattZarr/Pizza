<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use App\Http\Requests\PizzaEditRequest;
use App\Http\Requests\PizzaStoreRequest;

class PizzaController extends Controller
{
    public function addPizza(){
    return view('pizza.addPizzaPage');
    }

    public function createPizza(PizzaStoreRequest $request){
        $file = $request->file('image');
        $filename = uniqid()."_".$file->getClientOriginalName();
        $file->move(public_path().'/pizza/',$filename);
        Pizza::create([
            'pizza_name' => $request->pizza_name,
            'description' => $request->description,
            'smallPrice' => $request->smallPrice,
            'mediumPrice' => $request->mediumPrice,
            'largePrice' => $request->largePrice,
            'catagory' => $request->catagory,
            'image' => $filename,
        ]);

        return redirect('pizzaList')->with('message','Pizza is created Successfully!');

    }

    public function pizzaList(){
        $pizzas = Pizza::get();
        return view('pizza.pizzaList')->with('pizzas',$pizzas);
    }

    //edit pizza page
    public function editPage($id){
        $pizza = Pizza::find($id);
        return view('pizza.editPage')->with('pizza',$pizza);
    }

    //edit pizza
    public function editPizza(PizzaEditRequest $request,$id){

        if($request->has('image')){
            $file = $request->file('image');
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path().'/pizza/',$filename);
        }
        else{
            $imageData = Pizza::where('id',$id)->get();
            $filename = $imageData[0]->image;
        }
        $data = [
            'pizza_name' => $request->pizza_name,
            'description' => $request->description,
            'smallPrice' => $request->smallPrice,
            'mediumPrice' => $request->mediumPrice,
            'LargePrice' => $request->largePrice,
            'catagory' => $request->catagory,
            'image' => $filename,
        ];

        Pizza::where('id',$id)->update($data);
        return redirect('pizzaList')->with('EditSuccess','Pizza is Edited Successfully!');
    }

    //delete Pizza
    public function deletePizza($id){
        Pizza::find($id)->delete();
        return redirect('pizzaList')->with('deleteSuccess','Pizza is deleted Successfully!');
    }

}
