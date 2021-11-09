@extends('layouts.app')

@section('content')
<div class="container">
    <div class="dropdown1">
      <button class="btn btn-info dropdown-toggle" type="button" id="catagory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pizza Catagory
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <form action="{{route('userDashboard')}}" method="get">
       <input type="submit" name="catagory" value="normal" class="dropdown-item">
       <input type="submit" name="catagory" value="customize" class="dropdown-item">
       </form>
      </div>
    </div>
    <div class="row justify-content-center">

    <div class="drop_down col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                <ul class="list-group">
                <form action="{{route('userDashboard')}}" method="get">
                     <input type="submit" name="catagory" value="normal" class="list-group-item">
                     <input type="submit" name="catagory" value="customize" class="list-group-item">
                    </form>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                </div>
                <div class="card-body">
                <div class="row mt-3">
                @foreach($pizzas as $pizza)
                        <div class="col-md-5 mt-3 mr-3 ml-3">
                            <div class="card" style="width: 100%">
                              <img class="card-img-top" src="{{asset('pizza/'.$pizza->image)}}" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title">{{$pizza->pizza_name}}</h5>
                                <p class="card-text">{{$pizza->description}}</p>
                                <a href="{{route('pizzaDetails',$pizza->id)}}"><button class="order btn btn-danger">Order Now</button></a>
                              </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
