@extends('layouts')
@section('content')

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between mb-3">
    <a href="{{route('category_create')}}" class="p-2 mr-2" style="background-color:blue; color:white; text-decoration: none;"><i class="fas fa-plus"></i> Add Category</a>

    <a href="{{route('medics.create')}}" class="p-2" style="background-color:blue; color:white; text-decoration: none;"><i class="fas fa-plus"></i> Add Medics</a>

    <form class="form-inline" action="{{ route('medics.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search produc name">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Available Quantity</th>
                <th>Unit Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->category->category_name}}</td>
                    <td>{{$product->stock_quantity}}</td>
                    <td>{{$product->unit_price}}</td>
                    <td>
                        @if($product->stock_quantity > 100)
                            <span style="background-color: green;padding:5px;border-radius:10px;color:white;font-size:11px"">In stock</span>
                        @else
                            <span style="background-color: red;padding:5px;border-radius:10px;color:white;font-size:11px;white-space: nowrap">Out of stock</span>
                        @endif
                    </td>
                    <td class="d-flex">
                        <div class="mr-1">
                          <form action="{{ route('medics.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>            
                        </div>
                        <div>
                          <a href="{{ route('medics.edit', $product->id) }}"><button class="btn btn-primary">Edit</button></a>
                        </div>
                      </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

<script>
    document.getElementById('header-title').innerHTML = "Medicine Store - Available Medicines";
</script>

@endsection