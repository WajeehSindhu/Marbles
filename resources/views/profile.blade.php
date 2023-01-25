@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="{{asset('/uploads/download.png/')}}{{$user->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
            <h2> {{$user->name}} Profile</h2>
            <form enctype="multipart/form-data">
                <label>Upload Profile Image</label>
                <input type="file" name="avatar">
                @csrf
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection