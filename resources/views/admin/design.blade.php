@extends('admin.app')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Designs</li>
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
        <h2 class="h2">Design Details</h2>
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
                <th>Design Name</th>
                <th>Description</th>
                <th>Category</th>
                <th> Design Image </th>
                <th>Contact</th>
                <th>Date Created</th>

            </tr>
            </thead>
            @if($designs->count() > 0)
                @foreach($designs as $design)
                    <tr>
                        <td>{{$design->id}}</td>
                        <td>{{$design->name}}</td>
                        <td>{{$design->description}}</td>
                        <td>{{$design->category}}</td>
                        <td><a href="{{asset('uploads/'.$design->image)}}"><img src="{{asset('uploads/'.$design->image)}}" height="500px" width="500px"></a></td>
                        <td>{{$design->contact}}</td>
                        <td>{{$design->created_at}}</td>

                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" class="alert alert-info">No design Found..</td>
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

