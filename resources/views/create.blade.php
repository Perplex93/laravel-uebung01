@extends('welcome')

@section('title','Create Product')

@section('content')

    <div class="card mt-5">
        <div class="card-header">
            Add a Product
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('product.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="available">Available</label>
                    <select class="form-control" id="available" name="available">
                        <option value="1">Available</option>
                        <option value="0">Unavailable</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="desc" columns="30" rows="6" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Add a Product</button>
            </form>
        </div>
    </div>

@endsection