@extends('shopkeeper.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('shopkeeper.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Customers</li>
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
</div><div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2 class="h2">Customers List</h2>
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
            <th>First Name</th>
            <th>Email</th>
            <th>Billing Address</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    @if($customers->count() > 0)
    @foreach($customers as $customer)
            
    <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->billing_firstName}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->billing_address1}}</td>
        <td>{{$customer->created_at}}</td>
        <td>
            <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
           
		   @endforeach
    @else
    <tr>
        <td colspan="8" class="alert alert-info">No customers Found..</td>
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
