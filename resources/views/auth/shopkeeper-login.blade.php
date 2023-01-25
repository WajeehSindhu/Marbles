<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shopkeeper Login </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <!--===============================================================================================-->
    </head>
    <body>



        <div class="limiter">
            @if(\Session::has('login'))
                <div class="alert alert-danger">
                    <p>{{ \Session::get('login') }}</p>
                </div>
            @endif
            <div class="container-login100">
                <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('shopkeeper.login.submit') }}">
                        @csrf
                        <span class="login100-form-title p-b-32">
                            Account Login
                        </span>
                        <span class="txt1 p-b-11">
                            Email
                        </span>
                        <div class="wrap-input100 validate-input m-b-36 " data-validate = "Please enter email: ex@abc.xyz">
                            <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" >
                            <span class="focus-input100"></span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span class="txt1 p-b-11">
                            Password
                        </span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" >
                            <span class="focus-input100"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="flex-sb-m w-full p-b-48">
                            <div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('shopkeeper.password.request') }}" class="txt3">
                                    <b> Forgot Password?</b>
                                </a>
                                @endif
                            </div>
                            <a href="{{ route('shopkeeper.register') }}" class="txt3 bo1 hov1">
                                <b>Sign up now</b>
                            </a>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                            {{ __('Login') }}
                            </button>
                        </div>
                        {{--div class="flex-col-c p-t-224">
                        <span class="txt2 p-b-10">
                            Don’t have an account?
                        </span>
                        <a href="{{ route('register') }}" class="txt3 bo1 hov1">
                            Sign up now
                        </a>
                    </div>--}}
                </form>
            </div>

        </div>
    </div>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
