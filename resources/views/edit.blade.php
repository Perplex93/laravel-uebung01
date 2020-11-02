@extends('welcome')

@section('title','Edit Product')

@section('content')

    <div class="card mt-5">
        <div class="card-header">
            Edit a Product
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
            <form action="{{route('product.update', $product->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <label for="available">Available</label>
                    <select class="form-control" id="available" name="available" value="{{ $product->available }}">
                        <option value="1">Available</option>
                        <option value="0">Unavailable</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="desc" columns="30" rows="6" class="form-control">{{ $product->desc }}</textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Update a Product</button>
            </form>
        </div>
    </div>

@endsection