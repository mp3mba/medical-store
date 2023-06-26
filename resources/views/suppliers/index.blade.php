@extends('layouts')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('suppliers.create')}}" class="p-2" style="background-color:blue; color:white; text-decoration: none;"><i class="fas fa-plus"></i> Add Supplier</a>
</div>

<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Supplier Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Medical Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->phone}}</td>
                <td>{{$supplier->email}}</td>
                <td>{{$supplier->category}}</td>
                <td class="d-flex">
                    <div class="mr-1">
                      <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>            
                    </div>
                    <div>
                      <a href="{{ route('suppliers.edit', $supplier->id) }}"><button class="btn btn-primary" style="text-decoration: none;">Edit</button></a>
                    </div>
                </td>
            </tr>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    document.getElementById('header-title').innerHTML = "<h1>Medical Suppliers</h1>";
</script>
@endsection