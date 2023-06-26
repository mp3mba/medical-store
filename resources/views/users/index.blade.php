@extends('layouts')
@section('content')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-end mb-2">
    <a href="{{route('users.create')}}" class="p-2" style="background-color:blue; color:white; text-decoration: none;"><i class="fas fa-plus"></i> Add User</a>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td class="d-flex">
                    <div class="mr-1">
                      <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>            
                    </div>
                    <div>
                      <a href="{{ route('users.edit', $user->id) }}"><button class="btn btn-primary" style="text-decoration: none;">Edit</button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.getElementById('header-title').innerHTML = "<h1></h1>User List</h1>";
</script>
@endsection