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
    <form action="{{ route('category_store') }}" method="POST" style="width:300px;height:200px;background-color:white;padding:20px 30px">
        @csrf

        <div class="form-group">
            <label for="medicineName">Category Name</label>
            <input type="text" name="category_name" class="form-control" id="medicineName" placeholder="Enter Category Name">
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>

<script>
    document.getElementById('header-title').innerHTML = "Add Category - Medicine Category";
  </script>
@endsection