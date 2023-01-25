<!DOCTYPE html>
<html>
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
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <title>Our Marbles</title>
        @include('partials.css')
    </head>
    <body>
        @include('partials.topbar')
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Search your Favorite Products</h2>
                                        <h1>Live Search</h1>
                                        <div class="cr__btn">
                                            <a href="{{route('products.all')}}" style="background-color: #c2a476;">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="{{asset('assetss/images/slider/fornt-img/search.jpg')}}" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <!-- End Single Slide -->
            </div>
        </div>
        <br>
       {{-- <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Search Products</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Search</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="container box">
            <div class="panel panel-default">
                <div class="panel-heading">Search Products by Name OR Price</div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Products" />
                    </div>
                    <div class="table-responsive">
                        <h3 align="center">Total Products : <span id="total_records"></span></h3>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th><a href="{{route('products.single' , $products)}}">Title</a></th>
                                    <th>Price</th>
                                    <th>Shopkeeper</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.letter')
        @include('partials.footer')
        @include('partials.js')
    </body>
</html>
<script>
$(document).ready(function(){
fetch_product_data();
function fetch_product_data(query = '')
{
$.ajax({
url:"{{ route('live_search.action') }}",
method:'GET',
data:{query:query},
dataType:'json',
success:function(data)
{
$('tbody').html(data.table_data);
$('#total_records').text(data.total_data);
}
})
}
$(document).on('keyup', '#search', function(){
var query = $(this).val();
fetch_product_data(query);
});
});
</script>
