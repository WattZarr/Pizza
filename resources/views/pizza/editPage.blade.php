@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Pizza</div>
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                        <p>{{$error}}</p>
                        </div>
                    @endforeach
                @endif
                <div class="card-body">
                <form action="{{route('editPizza',$pizza->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$pizza->name}}">
                      </div>
                      <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description">{{$pizza->description}}</textarea>
                          </div>
                        <div class="form-inline">
                            <label style="margin-right:20px;">Price$</label>
                            <input type="number" name="smallPrice" placeholder="price for small" value="{{$pizza->smallPrice}}">
                            <input type="number" name="mediumPrice" placeholder="price for medium" value="{{$pizza->mediumPrice}}">
                            <input type="number" name="largePrice" placeholder="price for Large" value="{{$pizza->LargePrice}}">
                        </div>

                        <div class="form-group">
                            <label for="catagory">Catagory</label>
                            <select class="form-select" name="catagory">
                              <option selected value="normal">Normal Pizza</option>
                              <option value="customize">Customize Pizza</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" name="image">
                            <img src="{{asset('pizza/'.$pizza->image)}}" width="60">
                          </div>
                            <div class="form-group text-center">
                          <button type="submit" class="btn btn-outline-primary">Save</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
