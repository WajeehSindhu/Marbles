@extends('shopkeeper.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('shopkeeper.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Orders</li>
@endsection
@section('content')
<div class="row d-block">
    <div class="col-sm-12">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
    </div>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Orders List</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        {{--<a href="{{route('product.create')}}" class="btn btn-sm btn-outline-secondary">
            Add Product
        </a>--}}
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>UserID</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Price</th>
                <th>Date Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        @if($orders->count() > 0)
        @foreach($orders as $order)
               
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->product_id}}</td>
            <td>{{$order->title}}</td>
            <td>{{$order->qty}}</td>
            <td>{{$order->status}}</td>
            <td>PKR {{$order->price}}</td>
            <td>{{$order->created_at}}</td>
            <td>
                <form action="{{ route('orders.destroy', $order->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
                
        @endforeach
        @else
        <tr>
            <td colspan="8" class="alert alert-info">No orders Found..</td>
        </tr>
        @endif
    </tbody>
</table>
</div>
<div class="row">
<div class="col-md-12">
</div>
</div>
@endsection
<script type="text/javascript">
function confirmDelete(id){
let choice = confirm("Are You sure, You want to Delete this Order ?")
if(choice){
document.getElementById('delete-product-'+id).submit();
}
}
</script>
