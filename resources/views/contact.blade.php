<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        {{--<link rel="stylesheet" href="{{asset('assets/css1.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css3.css')}}">--}}
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
       {{-- <style type="text/css">
        .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
        }
        .has-error
        {
        border-color:#cc0000;
        background-color:#ffff99;
        }
        </style>--}}
        <title>Our Marbles</title>
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
        @include('partials.css')
    </head>
    <body>
        @include('partials.topbar')
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Contact Us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        {{--<section class="content contact-us">
            <h5>Contact us</h5>
            <p><i class="iconfont iconemail"></i><a  href="#"> info@ourmarbles.com</a> (Customer support)</p>
            <p><i class="iconfont iconemail"></i><a href="#"> +923047625271</a> (Cooperation inquiry)</p>
            <div class="logos">
                <a class="face"  href="#"><i class="iconfont icon_Facebook"></i></a>
                <div class="line"></div>
                <a class="twitter"  href="#"><i class="iconfont icon_Twitter"></i></a>
                <div class="line"></div>
                <a class="linked"  href="#"><i class="iconfont icon_LinkedIn"></i></a>
            </div>
        </section>--}}
        <br><br><br><br><br><br><br><br><br>
        <div class="contact-us-area box-contact">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="contact-us-inner">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- Contact-form-area Start -->
                                    <div class="contact-form-area">
                                        <h3>Send Message</h3>
                                        <!-- contact-form-warp Start -->
                                        <div class="contact-form-warp">
                                            <form action="{{url('contact/send')}}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-box">
                                                            <input type="text" class="form-control" name="name" placeholder="Your Name*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-box">
                                                            <input type="email" class="form-control" name="email" placeholder="Mail Address*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-box">
                                                            <textarea name="message" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contact-submit-btn">
                                                    <input type="submit" name="send" class="btn btn-info" value="Send" style="background-color: #c2a476;
                                          border-color: #8a6d3b;"/>
                                                   {{-- <p class="form-messege"></p>--}}
                                                </div>
                                            </form>
                                        </div>
                                        <!-- contact-form-warp End -->
                                    </div>
                                    <!-- Contact-form-area End -->
                                </div>
                                <div class="col-lg-3 offset-lg-1">
                                    <!-- Contact-info-wrap Start -->
                                    <div class="contact-info-wrap">
                                        <!-- single-contact-info start -->
                                        <div class="single-contact-info">
                                            <h3>Location</h3>
                                            <p>Superior Gold Campus</p>
                                        </div>
                                        <!-- single-contact-info End -->
                                        <!-- single-contact-info start -->
                                        <div class="single-contact-info">
                                            <h3>Phone</h3>
                                            <p><a href="#">+92 304 762 5271</a></p>
                                        </div>
                                        <!-- single-contact-info End -->
                                        <!-- single-contact-info start -->
                                        <div class="single-contact-info">
                                            <h3>E-mail</h3>
                                            <p><a href="#">info@ourmarbles.com</a></p>
                                        </div>
                                        <!-- single-contact-info End -->
                                    </div>
                                    <!-- Contact-info-wrap End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        {{--<div class="container box">
            <br>


            <form method="post" action="{{url('contact/send')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Your Email</label>
                    <input type="text" name="email" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="send" class="btn btn-info" value="Send" style="background-color: #c2a476;
                    border-color: #8a6d3b;"/>
                </div>
            </form>
        </div>--}}
        <br>
        @include('partials.letter')
        @include('partials.footer')
        <script src="{{asset('assetsssss/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset('assetsssss/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assetsssss/js/bootstrap.min.js')}}"></script>
        <!-- Plugins JS -->
        <script src="{{asset('assetsssss/js/plugins.js')}}"></script>
        <!-- Ajax Mail -->
        <script src="{{asset('assetsssss/js/ajax-mail.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('assetsssss/js/main.js')}}"></script>
    </body>
</html>
