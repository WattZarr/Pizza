<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function changeStatus(REQUEST $request,$id){
        Order::where('id',$id)->update(['status'=>$request->status]);
        return back();

    }
}
