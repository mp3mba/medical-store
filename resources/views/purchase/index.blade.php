@extends('layouts')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('purchases.create')}}" class="p-2" style="background-color:blue; color:white; text-decoration: none;"><i class="fas fa-plus"></i> Add Supplier</a>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Medical Category</th>
                <th>Supplied By</th>
                <th>Supplied Date</th>
                <th>Cost</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$purchase->medical_name}}</td>
                    <td>{{$purchase->medical_name}}</td>
                    <td>{{$purchase->supplier->name}}</td>
                    <td>{{$purchase->order_date}}</td>
                    <td>Tsh{{$purchase->total_price}}</td>
                    <td class="d-flex">
                        <div class="mr-1">
                        <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>            
                        </div>
                        <div>
                        <a href="{{ route('purchases.edit', $purchase->id) }}"><button class="btn btn-primary" style="text-decoration: none;">Edit</button></a>
                        </div>
                    </td>
                </tr>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.getElementById('header-title').innerHTML = "Medical Purchased";
</script>
@endsection