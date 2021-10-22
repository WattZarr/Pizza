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
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                <form>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Description"></textarea>
                          </div>
                        <div class="form-inline">
                            <label for="price" style="margin-right:20px;">Price$</label>
                            <input type="number" name="price" placeholder="price for small">
                            <input type="number" name="price" placeholder="price for medium">
                            <input type="number" name="price" placeholder="price for Large">
                        </div>

                        <div class="form-group">
                            <label for="catagory">Catagory</label>
                            <input type="text" class="form-control" id="catagory" placeholder="Catagory">
                          </div>

                          <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image">
                          </div>
                            <div class="form-group text-center">
                          <button type="button" class="btn btn-outline-primary">Save</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
