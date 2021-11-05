@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="drop_down col-md-4">

            @if(Auth::check())
            <div class="card">
                    <div class="card-header">User Order Profile</div>

                    <div class="card-body">
                        <p>Name:{{auth()->user()->name}}</p>
                        <p>Email:{{auth()->user()->email}}</p>
                        <form action="#" method="post">
                            <p>Phone Number:<input type="number" name="phone" placeholder="phone Number"></p>

                            <p>Small Pizza Amount<input type="number" name="smallPizza" value="0"></p>
                            <p>Medium Pizza Amount<input type="number" name="mediumPizza" value="0"></p>
                            <p>Large Pizza Amount<input type="number" name="largePizza" value="0"></p>

                            <button type="submit" class="btn btn-danger ml-5">Order</button>
                        </form>
                    </div>
                </div>
                @else
                    <a href="{{route('login')}}">You need to log in first to make an order.Click here to login.</a>
                @endif
        </div>

        <div class="drop_down col-md-8">
            <div class="details">
                <img src="{{asset('pizza/'.$pizza[0]->image)}}" class="orderImage">
                <div style="margin-left:83px;">
                <h4>{{$pizza[0]->pizza_name}}</h4>
                <h5>{{$pizza[0]->description}}</h5>
                <h5>Small Pizza Price : {{$pizza[0]->smallPrice}}  $</h5>
                <h5>Medium Pizza Price : {{$pizza[0]->mediumPrice}}  $</h5>
                <h5>Large Pizza Price : {{$pizza[0]->LargePrice}}  $</h5>
                <a href="{{route('userDashboard')}}"><button class="btn btn-info">Back</button></a>
                </div>
            </div>
        </div>

        <!-- For Mobile -->
        <div class="mobile_container">
        <h3>Details</h3>
            <img src="{{asset('pizza/'.$pizza[0]->image)}}" class="mobileImage">
            <h4><span>Pizza Name</span>:{{$pizza[0]->pizza_name}}</h4>
            <h5>{{$pizza[0]->description}}</h5>
            <h5><span>Small Pizza Price</span> : {{$pizza[0]->smallPrice}}  $</h5>
            <h5><span>Medium Pizza Price</span> : {{$pizza[0]->mediumPrice}}  $</h5>
            <h5><span>Large Pizza Price</span> : {{$pizza[0]->LargePrice}}  $</h5>
            <a href="{{route('userDashboard')}}"><button class="btn btn-info">Back</button></a>
        </div>

        <div class="card-header mt-5">Order Form</div>
        @if(Auth::check())
        <div class="card">
                <div class="card-header">User Order Profile</div>

                <div class="card-body">
                    <p>Name:{{auth()->user()->name}}</p>
                    <p>Email:{{auth()->user()->email}}</p>
                    <form action="#" method="post">
                        <p>Phone Number:<input type="number" name="phone" placeholder="phone Number"></p>

                        <p>Small Pizza Amount<input type="number" name="smallPizza" value="0"></p>
                        <p>Medium Pizza Amount<input type="number" name="mediumPizza" value="0"></p>
                        <p>Large Pizza Amount<input type="number" name="largePizza" value="0"></p>

                        <button type="submit" class="btn btn-danger ml-5">Order</button>
                    </form>
                </div>
            </div>
            @else
                <p style="padding:10px;">You must log in to your account to make an order</p>
                <a href="{{route('login')}}"><p style="padding:10px 15px;">Click here to login.</p></a>
            @endif
    </div>
</div>

@endsection
