<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <title>Our Marbles</title>
        <!-- Font Awesome Icons -->
        <link href="{{asset('assetsss/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!-- Plugin CSS -->
        <link href="{{asset('assetsss/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
        <!-- Theme CSS - Includes Bootstrap -->
        <link href="{{asset('assetsss/css/creative.min.css')}}" rel="stylesheet">
        @include('partials.css')
    </head>
    <body>
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">AI Marbles</h1>
                        <hr class="divider my-4">
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">"I found Rome a city of brickes and left it a city of marble." ~ Augustus</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('login')}}">Sign In</a>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{route('register')}}">Sign Up</a>
                    </div>
                </div>
            </div>
        </header>
        @include('partials.footer')
        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('asssetsss/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('asssetsss/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Plugin JavaScript -->
        <script src="{{asset('asssetsss/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('asssetsss/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <!-- Custom scripts for this template -->
        <script src="{{asset('asssetsss/js/creative.min.js')}}"></script>
    </body>
</html>