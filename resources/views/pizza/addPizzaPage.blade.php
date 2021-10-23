@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item">View</li>
                      <li class="list-group-item">Create</li>
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

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                <form action="{{route('createPizza')}}" method="post" enctype="multipart/form-data">
                @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description"></textarea>
                          </div>
                        <div class="form-inline">
                            <label style="margin-right:20px;">Price$</label>
                            <input type="number" name="smallPrice" placeholder="price for small">
                            <input type="number" name="mediumPrice" placeholder="price for medium">
                            <input type="number" name="largePrice" placeholder="price for Large">
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
