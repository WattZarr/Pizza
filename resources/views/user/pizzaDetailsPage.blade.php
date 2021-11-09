@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="drop_down col-md-4">

            @if(Auth::check())
            <div class="card">
                    <div class="card-header">User Order Profile</div>

                    <div class="card-body">
                        <p><span class="controlWidth">Name:</span>{{auth()->user()->name}}</p>
                        <p><span class="controlWidth">Email:</span>{{auth()->user()->email}}</p>
                        <form action="{{route('orderPizza')}}" method="post">
                        @csrf
                            <p><span class="controlWidth">Phone Number:</span><input type="number" name="phone" placeholder="phone Number" required></p>

                            <p>Small Pizza Amount<input type="number" name="smallPizza" value="0"></p>
                            <p>Medium Pizza Amount<input type="number" name="mediumPizza" value="0"></p>
                            <p>Large Pizza Amount<input type="number" name="largePizza" value="0"></p>
                            <textarea name="body" cols="30" rows="3" placeholder="Write some messge if you want to tell us something about your pizza"></textarea>
                            <p class="text-center"><button type="submit" class="btn btn-danger ml-5">Order</button></p>
                            <input type="hidden" name="pizza_id" value="{{$pizza[0]->id}}">
                        </form>
                        @if (session('message'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                @else
                    <a href="{{route('login')}}">You need to log in first to make an order.Click here to login.</a>
                    <br>
                    <br>
                   <p><a href="{{route('register')}}">If you are new to this website,click here to register your account first</a></p>
                    <p style="color:red;font-size:large;">You can log in only when you have already created your account.</p>
                @endif
        </div>

        <div class="drop_down col-md-8">
            <div class="details">
                <h3 class="card-header">Details</h3>
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
            <div class="card ml-4 mt-3" style="width:320px;">
              <img class="mobileImage card-img-top" src="{{asset('pizza/'.$pizza[0]->image)}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$pizza[0]->pizza_name}}</h5>
                <p class="card-text">{{$pizza[0]->description}}</p>
                <p class="card-text"><span>Small Pizza Price</span> : {{$pizza[0]->smallPrice}}  $</p>
                <p class="card-text"><span>Medium Pizza Price</span> : {{$pizza[0]->mediumPrice}}  $</p>
                <p class="card-text"><span>Large Pizza Price</span> : {{$pizza[0]->LargePrice}}  $</p>
                <a href="{{route('userDashboard')}}" class="btn btn-info">Back</a>
              </div>
            </div>

            <div class="card-header mt-5">Order Form</div>
            @if(Auth::check())
            <div class="card">

                    <div class="card-body">
                        <p><span class="controlWidth">Name:</span>{{auth()->user()->name}}</p>
                        <p><span class="controlWidth">Email:</span>{{auth()->user()->email}}</p>
                        <form action="{{route('orderPizza')}}" method="post">
                        @csrf
                            <p><span class="controlWidth">Phone Number:</span><input type="number" name="phone" placeholder="phone Number" required></p>

                            <p>Small Pizza Amount<input type="number" name="smallPizza" value="0"></p>
                            <p>Medium Pizza Amount<input type="number" name="mediumPizza" value="0"></p>
                            <p>Large Pizza Amount<input type="number" name="largePizza" value="0"></p>
                            <textarea name="body" cols="30" rows="3" placeholder="Write anything you want about your pizza"></textarea>
                            <input type="hidden" name="pizza_id" value="{{$pizza[0]->id}}">
                            <button type="submit" class="alignLeft btn btn-danger">Order</button>
                        </form>
                        @if (session('message'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                @else
                    <p style="padding:10px;">You must log in to your account to make an order</p>
                    <a href="{{route('login')}}"><p style="padding:10px 15px;">Click here to login.</p></a>
                    <a href="{{route('register')}}">If you are new to this webiste,click here to register your account first.</a>
                    <p style="color:red;font-size:large;">You can log in only when you have already created your account.</p>
                @endif
        </div>


    </div>
</div>

@endsection
