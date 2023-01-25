<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('assetsssss/css/bootstrap.min.css')}}">

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{asset('assetsssss/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsssss/css/Pe-icon-7-stroke.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assetsssss/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assetsssss/css/style.css')}}">

    <!-- Modernizer JS -->
    <script src="{{asset('assetsssss/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    {{--<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">--}}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.css')
    <title>Our Marbles</title>
</head>
<body>
@include('partials.topbar')
<div class="breadcrumb-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="breadcrumb-title">Design</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Design</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
</br>

<div class="col-md-3"> </div>

<div class="row ">
<div class="col-md-6">
   
    <div class="container">
	 @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
    @endif
<form action="{{route('design.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="form-control-label">Title: </label>
            <input type="text" id="txturl" name="name" class="form-control " value="" />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="form-control-label">Write Description About Design: </label>
            <textarea name="description" id="editor" class="form-control "></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-3">
		<label class="form-control-label">Category: </label>
		
            <select class="mdb-select md-form" name="category">
                <option value="" disabled selected>Choose your option</option>
                <option value="Marbles">Marbles</option>
                <option value="Tiles">Tiles</option>
                <option value="Granite">Granite</option>
            </select>
        </div>
    </div>
    <div class="form-group row" >
        <div class="col-lg-4">
            <label class="form-control-label">Upload Picture: </label>
            <input type="file" id="image" name="image" class="form-control " value="" />
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="form-control-label">Your Contact: </label>
            <input type="contact"  name="contact" class="form-control " value="" />
        </div>
    </div>
    <input type="submit" name="submit" class="btn btn-primary " value="Add Design" />
</form>
    </div>
	</div>
    </div>

<div class="col-md-3"> </div>
</div>
<br>



</body>
@include('partials.letter')
@include('partials.js')

</html>

