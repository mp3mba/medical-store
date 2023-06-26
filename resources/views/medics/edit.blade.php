@extends('layouts')
@section('content')

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-end">
    <a href="{{route('medics.index')}}" class="p-2" style="background-color:blue; color:white"><i class="fas fa-arrow-left"></i>Back</a>
</div>

<div class="container mt-4 d-flex justify-content-center">
    <form action="{{ route('medics.update', $product->id) }}" method="POST" style="width:500px;height300px;background-color:white;padding:20px 30px">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Medicine Name</label>
                    <input type="text" class="form-control" name="name" id="medicineName" value="{{$product->product_name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Unit Price/Selling Price</label>
                    <input type="number" name="price" class="form-control" id="availability" value="{{$product->unit_price}}">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Stock Quantity</label>
                    <input type="number" name="stock" class="form-control" id="medicineName" value="{{$product->stock_quantity}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Medicine Category</label>
                    <select class="form-control" id="country" name="category">
                        <option value="{{$product->category->id}}">{{$product->category->category_name}}</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Buyying Price</label>
                    <input type="number" name="buy_price" class="form-control" id="medicineName" value="{{$product->buy_price}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Medicine</button>
    </form>
</div>

<script>
    document.getElementById('header-title').innerHTML = "Add Medicine - Medicine Store";
  </script>
@endsection