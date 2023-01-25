<!DOCTYPE html>
<html >
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
        <title>Our Marbles</title>
        <link href="{{asset('assetssss/css/bootstrap.min.css')}}" rel="stylesheet">
        @include('partials.css')
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
    </head>
    <body>
    @include('partials.topbar')
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area section-ptb">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 class="breadcrumb-title">Online Predictor</h2>
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item active">Online Predictor</li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="margin-left: 213px;
                    margin-top: 30px;">
                    Customer will be able to online calculate marble quantity. He can do it by putting following details in online calculator:
                    •   Room Dimensions
                    •   Marble Dimensions
                </p>
                <p style="margin-left: 213px;
                    margin-top: 30px;">
                    <strong>Formula: </strong>Marble Quantity = (room dimensions)/(marble dimensions)
                </p>
            </div>
        </div>
        <br><br>
        <div class="container">
            <form class="form-horizontal" method="POST" action="{{ route('calculate') }}">
                @csrf
                <div class="row text-center">
                    <div class="col-md-3">
                        <select class="form-control" name="operator" required>
                            <option value="" selected="">--Select Operator--</option>
                            {{-- <option value="plus"> + </option>
                            <option value="minus"> - </option>
                            <option value="multiply"> * </option>--}}
                            <option value="divide"> / </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="number" name="first" placeholder="Room Dimensions ( L x W )" required>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="number" name="second" placeholder="Marble Dimensions ( L x W )" required>
                    </div>
                    <div class="col-md-3">
                        <button class=" btn btn-warning" type="submit">Calculate</button>
                    </div>
                </div>
            </form>
            <br><br><br>
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    @if(session('info'))
                    <div class="alert alert-info">
                        {{session('info')}}
                    </div>
                    @endif
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <script src="{{asset('assetssss/js/jquery.js')}}"></script>
        <script src="{{asset('assetssss/js/bootstrap.min.js')}}"></script>
        @include('partials.letter')
        @include('partials.footer')
        @include('partials.js')
    </body>
</html>
