<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Change Password </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
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
            <div class="container-login100">
                <div class="wrap-login100 p-t-90 p-b-30">
                    <form class="login100-form validate-form" method="POST" action="{{ route('admin.password.update') }}" >
                        @csrf
                        <span class="login100-form-title p-b-40">
                            Admin Change Password
                        </span>
                        <div class="wrap-input100 validate-input m-b-16">
                            <span class="btn-show-pass">
                                <i class="fa fa fa-eye"></i>
                            </span>
                            <input type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword" value="{{ old('oldpassword') }}" placeholder="Old Password" id="oldpassword">
                            <span class="focus-input100"></span>
                            @error('oldpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
                            <span class="btn-show-pass">
                                <i class="fa fa fa-eye"></i>
                            </span>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" id="password">
                            <span class="focus-input100"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="wrap-input100 validate-input m-b-20" data-validate = "Please Re-enter password">
                            <span class="btn-show-pass">
                                <i class="fa fa fa-eye"></i>
                            </span>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation"  placeholder="Confirm Password"  id="password-confirm" >
                            <span class="focus-input100"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                            {{ __('Change Password') }}
                            </button>
                            <div class="row">
                                <div class="col-md-12">
                                    @if(session('Unsuccess'))
                                    <div class="alert alert-danger">
                                        {{session('Unsuccess')}}
                                    </div>
                                @endif</div>
                            </div>
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