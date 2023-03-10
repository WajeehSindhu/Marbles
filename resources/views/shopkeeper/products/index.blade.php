@extends('shopkeeper.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('shopkeeper.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Products</li>
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
    <h2 class="h2">Products List</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{route('product.create')}}" class="btn btn-sm btn-outline-secondary">
            Add Product
        </a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Shopkeeper</th>
                <th>Categories</th>
                <th>Price</th>
                <th>Thumbnail</th>
                <th>Date Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @if($products->count() > 0)
            @foreach($products as $product)
                
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{!! $product->shopkeeper !!}</td>
                <td>
                    @if($product->categories()->count() > 0)
                    @foreach($product->categories as $children)
                    {{$children->title}},
                    @endforeach
                    @else
                    <strong>{{"product"}}</strong>
                    @endif
                </td>
                <td>Rs{{$product->price}}</td>
                <td><img src="{{asset('uploads/'.$product->thumbnail)}}" alt="{{$product->title}}" class="img-responsive" height="300px" width="300px"/></td>
                @if($product->trashed())
                <td>{{$product->deleted_at}}</td>
                <td><a class="btn btn-info btn-sm" href="{{route('product.recover',$product->id)}}">Restore</a> | <a class="btn btn-danger btn-sm" href="javascript:;" onclick="confirmDelete('{{$product->id}}')">Delete</a>
                <form id="delete-product-{{$product->id}}" action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            </td>
            @else
            <td>{{$product->created_at}}</td>
            <td><a class="btn btn-info btn-sm" href="{{route('product.edit',$product->id)}}">Edit</a> |
            <a id="trash-product-{{$product->id}}" class="btn btn-warning btn-sm" href="{{route('product.remove',$product->id)}}">Trash</a>
            | <a class="btn btn-danger btn-sm" href="javascript:;" onclick="confirmDelete('{{$product->id}}')">Delete</a>
            <form id="delete-product-{{$product->id}}" action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: none;">
                @method('DELETE')
                @csrf
            </form>
        </td>
        @endif

    </tr>
            
    @endforeach
    @else
    <tr>
        <td colspan="8" class="alert alert-info">No products Found..</td>
    </tr>
    @endif
</tbody>
</table>
</div>
<div class="row">
<div class="col-md-12">
{{$products->links()}}
</div>
</div>
@endsection
<script type="text/javascript">
function confirmDelete(id){
let choice = confirm("Are You sure, You want to Delete this Product ?")
if(choice){
document.getElementById('delete-product-'+id).submit();
}
}
</script>
