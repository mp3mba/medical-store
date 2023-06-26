@extends('layouts')
@section('content')

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-end">
    <a href="{{route('purchases.index')}}" class="p-2" style="background-color:blue; color:white;text-decoration:none"><i class="fas fa-arrow-left"></i>Back</a>
</div>

<div class="container mt-4 d-flex justify-content-center">
    <form action="{{ route('purchases.store') }}" method="POST" style="width:500px;height:300px;background-color:white;padding:20px 30px">
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
                    <label for="availability">Buying Price</label>
                    <input type="text" name="price" class="form-control" id="availability" placeholder="Eg 12000">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Purchase Date</label>
                    <input type="date" name="date" class="form-control" id="medicineName" placeholder="date">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Medicine Category</label>
                    <select class="form-control" id="country" name="supply_id">
                        <option value="">Select Category</option>
                        @foreach($supplies as $supply)
                            <option value="{{$supply->id}}">{{$supply->category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Medicine</button>
    </form>
</div>

<script>
    document.getElementById('header-title').innerHTML = "Purchase Medical Product";
  </script>
@endsection