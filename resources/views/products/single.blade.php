<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
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

        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            @include('partials.topbar')
            <div class="breadcrumb-area section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="breadcrumb-title">Products</h2>
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    @include('partials.message')
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="img-tab-1">
                                            <img src="{{asset('uploads/'.$product->thumbnail)}}" style="height: 500px;" alt="full-image">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                                <!-- Start Small images -->
                                <!-- End Small images -->
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2>{{$product->title}}</h2>
                                <ul class="pro__prize">
                                    <li>Rs {{$product->price}} per Sq Ft. / Sq Meter</li>
                                </ul>
                                <p class="pro__info">{{$product->shopkeeper}}</p>
                                <div class="ht__pro__desc">
                                    <div class="sin__desc">
                                        <p><span>Availability:</span> In Stock</p>
                                    </div>
                                    <div class="cr__btn" >
                                        <a href="{{route('products.addToCart' , $product)}}"  style="background-color: #c2a476;"> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        <footer id="htc__footer">
            <!-- Start Copyright Area -->
            @include('partials.letter')
            @include('partials.footer')
            <!-- End Copyright Area -->
        </footer>
    </body>
</html>
