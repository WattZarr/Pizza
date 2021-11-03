@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">

    <div class="col-md-2">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                      <a href="{{route('pizzaList')}}"><li class="list-group-item">View</li></a>
                      <a href="{{route('addPizza')}}"><li class="list-group-item">Create</li></a>
                      <a href="{{route('userOrderPage')}}"><li class="list-group-item">Users' order</li></a>
                    </ul>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                            <p>{{$error}}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-10">
                <table class="table table-hover">
                <h3>Customers' Order List</h3>
                  <thead>
                    <tr>
                      <th scope="col">User</th>
                      <th scope="col">Phone/Email</th>
                      <th scope="col">Date/Time</th>
                      <th scope="col">Pizza</th>
                      <th scope="col">Small Pizza</th>
                      <th scope="col">Medium Pizza</th>
                      <th scope="col">Large Pizza</th>
                      <th scope="col">Message</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($order as $item)
                    <tr>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->date}}/{{$item->time}}</td>
                      <td>{{$item->pizza_name}}</td>
                      <td>{{$item->smallPizza}}</td>
                      <td>{{$item->mediumPizza}}</td>
                      <td>{{$item->largePizza}}</td>
                      <td>{{$item->body}}</td>
                      <td>{{$item->status}}</td>
                      <form action="{{route('changeStatus',$item->id)}}" method="post">
                      @csrf
                        <td>
                            <input type="submit" name="status" value="accepted" class="btn btn-primary btn-sm">
                        </td>
                        <td>
                            <input type="submit" name="status" value="rejected" class="btn btn-danger btn-sm">
                        </td>
                        <td>
                        <input type="submit" name="status" value="completed" class="btn btn-success btn-sm">
                        </td>
                      </form>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
        </div>
    </div>
</div>
@endsection
