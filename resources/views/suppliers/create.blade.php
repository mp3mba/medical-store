@extends('layouts')
@section('content')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-end">
    <a href="{{route('suppliers.index')}}" class="p-2" style="background-color:blue; color:white"><i class="fas fa-arrow-left"></i>Back</a>
</div>

<div class="d-flex justify-content-center">
    <form action="{{route('suppliers.store')}}" class="px-5 py-2" method="POST" style="width:370px; background-color:white; width:380px">
        @csrf
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" autocomplete="off" required>
        </div>
        
        <div class="form-group">
            <label for="country">Category</label>
            <select class="form-control" id="country" name="category">
                <option value="">Select medic category</option>
                <option value="vaccine">Vaccine</option>
                <option value="painkiller">Painkiller</option>
                <option value="antibiotics">Antibiotics</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="eg. 0769323980"  required>
        </div>
        
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-75" style="border-radius:25px">Submit</button>
        </div>
    </form>
</div>

  <script>
    document.getElementById('header-title').innerHTML = "Add New Supplier";
  </script>

@endsection  
