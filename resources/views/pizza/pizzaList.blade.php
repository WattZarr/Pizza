@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza List</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Image</th>
                          <th scope="col">Name</th>
                          <th scope="col">Description</th>
                          <th scope="col">Small Price</th>
                          <th scope="col">Medium Price</th>
                          <th scope="col">Large Price</th>
                          <th scope="col">Catagory</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($pizzas as $pizza)
                        <tr>
                          <td><img src="{{asset('pizza/'.$pizza->image)}}" width="80"></td>
                          <td>{{$pizza->name}}</td>
                          <td>{{$pizza->description}}</td>
                          <td>{{$pizza->smallPrice}}</td>
                          <td>{{$pizza->mediumPrice}}</td>
                          <td>{{$pizza->LargePrice}}</td>
                          <td>{{$pizza->catagory}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
