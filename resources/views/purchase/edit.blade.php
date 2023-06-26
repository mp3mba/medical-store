@extends('layouts')
@section('content')

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-end">
    <a href="{{route('purchases.index')}}" class="p-2" style="background-color:blue; color:white"><i class="fas fa-arrow-left"></i>Back</a>
</div>

<div class="container mt-4 d-flex justify-content-center">
    <form action="{{ route('purchases.update', $purchase->id) }}" method="POST" style="width:500px;height:300px;background-color:white;padding:20px 30px">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Medicine Name</label>
                    <input type="text" class="form-control" name="name" id="medicineName" value="{{$purchase->medical_name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Buying Price</label>
                    <input type="text" name="price" class="form-control" id="availability" value="{{$purchase->total_price}}">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="medicineName">Purchase Date</label>
                    <input type="date" name="date" class="form-control" id="medicineName" value="{{$purchase->order_date}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="availability">Medicine Category</label>
                    <select class="form-control" id="country" name="supply_id">
                        <option value="{{$purchase->supplier_id}}">{{$purchase->supplier->category}}</option>
                        @foreach($supplies as $supply)
                            <option value="{{$supply->id}}">{{$supply->Category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script>
    document.getElementById('header-title').innerHTML = "Update Medical Product";
  </script>
@endsection