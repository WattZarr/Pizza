@extends('layouts.app')

@section('content')
<div class="container">
    <div class="dropdown">
      <button class="btn btn-info dropdown-toggle" type="button" id="catagory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pizza Catagory
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Normal Pizza</a>
        <a class="dropdown-item" href="#">Customize Pizza</a>
      </div>
    </div>
    <div class="row justify-content-center">

    <div class="drop_down col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                <ul class="list-group">
                      <li class="list-group-item">Catogory1</li>
                      <li class="list-group-item">Catagory2</li>
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
                                <a href="#" class="btn btn-danger">Order Now</a>
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
