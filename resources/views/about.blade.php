<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        {{--<link rel="stylesheet" href="{{asset('assets/css1.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css3.css')}}">--}}
        <!-- Bootstrap CSS -->

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

        <title>Our Marbles</title>
    </head>
    <body>
    @include('partials.topbar')

      {{--  <section class="content contact-us">
            <h5>About us</h5>
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
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Team Member</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Team Member</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area  section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4>OUR BEST FOR YOU</h4>
                            <h2>Team Member</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- single-member Start -->
                        <div class="single-team-member mt--30">
                            {{-- <div class="team-member-image hover-2">
                                <img src="{{asset('assetsssss/images/team/zain.jpg')}}" alt="" style="height:300px; width:370px;">
                                <div class="team-social-link">
                                    <ul>
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="team-member-info text-center">
                                <h3>Ghulam Jillani</h3>
                                <p>BSIT-F18-40</p>
                            </div>
                        </div>
                        <!-- single-member End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- single-member Start -->
                        <div class="single-team-member mt--30">
                            {{-- <div class="team-member-image hover-2">
                                <img src="{{asset('assetsssss/images/team/butt.jpg')}}" alt="">
                                <div class="team-social-link">
                                    <ul>
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="team-member-info text-center">
                                <h3>Muhammad Usama</h3>
                                <p>BSIT-F18-28</p>
                            </div>
                        </div>
                        <!-- single-member End -->
                    </div>
                    {{-- <div class="col-lg-4 col-md-6"> --}}
                        <!-- single-member Start -->
                        {{-- <div class="single-team-member mt--30">
                            <div class="team-member-image hover-2">
                                <img src="{{asset('assetsssss/images/team/fahad.jpg')}}" alt="">
                                <div class="team-social-link">
                                    <ul>
                                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-member-info text-center">
                                <h3>Fahad Sattar</h3>
                                <p>BSEM-S15-057</p>
                            </div>
                        </div> --}}
                        <!-- single-member End -->
                    {{-- </div> --}}
                </div>
            </div>
        </div>


        @include('partials.letter')
        @include('partials.footer')

        <!-- jQuery JS -->
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
