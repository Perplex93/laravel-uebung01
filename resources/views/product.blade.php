@extends ('welcome')

@section('title', 'Product Show')

@section('content')

    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success')}}
            </div>
        @endif    
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Product Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Available</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->desc}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->available}}</td>
                <td> <a href="{{ route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a> </td>
                <td>
                    <form action="{{route('product.destroy', $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
