@extends('layouts')
@section('content')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-end">
    <a href="{{route('users.index')}}" class="p-2" style="background-color:blue; color:white"><i class="fas fa-arrow-left"></i>Back</a>
</div>

<div class="d-flex justify-content-center">
    <form action="{{route('users.store')}}" class="px-5 py-2" method="POST" style="width:370px; background-color:white; width:380px">
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
            <label for="country">User Role</label>
            <select class="form-control" id="country" name="role">
                <option value="">Select user role</option>
                <option value="administrator">Administrator</option>
                <option value="store_manager">Store Manager</option>
                <option value="cashier">Cashier</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"  required>
        </div>
        
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-75" style="border-radius:25px">Submit</button>
        </div>
    </form>
</div>

  <script>
    document.getElementById('header-title').innerHTML = "Add New User";
  </script>

@endsection  
