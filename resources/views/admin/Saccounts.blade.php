@extends('admin.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Shopkeepers</li>
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
<h2 class="h2">Shopkeeper Accounts</h2>
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
            <th>Picture</th>
            <th>Date Created</th>
            <th>Actions</th>
            <th>Delete</th>
            <th>Deactivate Users</th>
        </tr>
    </thead>
    @if($shopkeepers->count() > 0)
    @foreach($shopkeepers as $shopkeeper)
    <tr>
        <td>{{$shopkeeper->id}}</td>
        <td>{{$shopkeeper->name}}</td>
        <td>{{$shopkeeper->email}}</td>
        <td><img src = {{asset($shopkeeper->avatar)}} style="height:100px; width:100px;"></td>
        @if($shopkeeper->trashed())
        <td>{{$shopkeeper->deleted_at}}</td>
            <td><a class="btn btn-success btn-sm" href="{{route('shopkeeper.activate',$shopkeeper->id)}}">Activate</a></td>
            <td><form action="{{ route('shopkeepers.destroy', $shopkeeper->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>

            </td>
            <td><a class="btn btn-info btn-sm" href="{{route('shopkeeper.trash')}}" >Activate Users</a></td>
            @else
            <td>{{$shopkeeper->created_at}}</td>
            <td><a class="btn btn-outline-danger btn-sm" href="{{route('shopkeeper.deactivate',$shopkeeper->id)}}">Deactivate</a></td>
                <td><form action="{{ route('shopkeepers.destroy', $shopkeeper->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>

            </td>
            <td><a class="btn btn-info btn-sm" href="{{route('shopkeeper.trash')}}" >Deactivate Users</a></td>
            @endif
</tr>
@endforeach
@else
<tr>
    <td colspan="8" class="alert alert-info">No shopkeepers Found..</td>
</tr>
@endif
</tbody>
</table>
</div>
<div class="row">
<div class="col-md-12">
    {{$shopkeepers->links()}}
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
