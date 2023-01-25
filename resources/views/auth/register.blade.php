<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration </title>
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
            <div class="container-login100" style="background-image: {{asset('download.jpg')}}">
                <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                    <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <span class="login100-form-title p-b-32">
                            Registration
                        </span>
                        <span class="txt1 p-b-11">
                            Username
                        </span>
                        <div class="wrap-input100 validate-input m-b-36 " data-validate="Please enter Username">
                            <input type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name">
                            <span class="focus-input100"></span>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span class="txt1 p-b-11">
                            Email
                        </span>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                            <span class="focus-input100"></span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for = "avatar" class="col-md-4 col-form-label text-md-right">Please Upload Your Avatar<br>
                                <span class = "text-small text-info">* Not Required</span>
                            </label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" @error('avatar') is-invalid @enderror name="avatar"/>
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <span class="txt1 p-b-11">
                            Password
                        </span>
                        <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
                            <span class="btn-show-pass">
                                <i class="fa fa fa-eye"></i>
                            </span>
                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"  id="password">
                            <span class="focus-input100"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span class="txt1 p-b-11">
                            Confirm Password
                        </span>
                        <div class="wrap-input100 validate-input m-b-20" data-validate = "Please Re-enter password">
                            <span class="btn-show-pass">
                                <i class="fa fa fa-eye"></i>
                            </span>
                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password_confirmation"  id="password-confirm" >
                            <span class="focus-input100"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                            {{ __('Register') }}
                            </button>
                        </div>
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