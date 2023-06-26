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
    <form action="{{ route('medics.store') }}" method="POST" style="width:500px;height:300px;background-color:white;padding:20px 30px">
        @csrf

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Medicine Name</label>
                    <input type="text" class="form-control" name="name" id="medicineName" placeholder="Enter medicine name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Unit Price/Selling Price</label>
                    <input type="number" name="price" class="form-control" id="availability" placeholder="Enter Unit Price">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Stock Quantity</label>
                    <input type="number" name="stock" class="form-control" id="medicineName" placeholder="EnterStock Quantity">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Medicine Category</label>
                    <select class="form-control" id="country" name="category">
                        <option value="">Select Category</option>
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
                    <input type="number" name="buy_price" class="form-control" id="medicineName" placeholder="eg 0756 456 324">
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