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
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                                        <h2>Update or Manage your </h2>
                                        <h1>cart here</h1>
                                        <div class="cr__btn">
                                            <a href="{{route('products.all')}}" style="background-color: #c2a476;">Add More Products</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="{{asset('assetss/images/slider/fornt-img/cart.jpg')}}" alt="slider images">
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
       {{-- <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="breadcrumb-title">Cart</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>--}}
        @if(isset($cart) && $cart->getContents())
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                @include('partials.message')
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">products</th>
                                        <th class="product-name">name of products</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart->getContents() as $id => $product)
                                    <tr>
                                        <td class="product-thumbnail"><a href="{{route('products.single' , $product)}}"><img src="{{asset('uploads/'.$product['product']->thumbnail)}}" alt="product img"></a></td>
                                        <td class="product-name"><a href="#">{{$product['product']->title}}</a>
                                    </td>
                                    <td class="product-price"><span class="amount">Rs {{$product['product']->price}}</span></td>
                                    <td class="product-quantity">
                                        <form method="post"action="{{route('cart.update' ,$id)}}">
                                            @csrf
                                            <input type="number" name="qty" id="qty"  min="0" value="{{$product['qty']}}">
                                            <input type="submit" name="update" value="Update" class="btn btn-block btn-outline-success btn-round" style=
                                            "margin-top:50px;
                                            border: 1px solid brown;
                                            background-color: #c2a476;
                                            color: whitesmoke">
                                        </form>
                                    </td>
                                    <td class="product-subtotal">Rs {{$product['price']}}</td>
                                    <td class="product-remove">
                                        <form action="{{route('cart.remove' , $id)}}" method="POST">
                                            @csrf
                                            <input type="submit" class="btn btn-outline-danger" value="X"
                                            style="background-color: indianred;
                                            color: whitesmoke">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="buttons-cart--inner">
                                <div class="buttons-cart">
                                    <a href="{{route('products.all')}}">Continue Shopping</a>
                                </div>
                                <div class="buttons-cart checkout--btn">
                                    <a href="{{route('checkout')}}">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="htc__cart__total">
                                <h6>cart total</h6>
                                <div class="cart__desk__list">
                                    <ul class="cart__desc">
                                        <li>cart Quantity</li>
                                        <li>cart total</li>
                                    </ul>
                                    <ul class="cart__price">
                                        <li>{{$cart->getTotalQty()}}</li>
                                        <li>Rs {{$cart->getTotalPrice()}}</li>
                                    </ul>
                                </div>
                                <div class="cart__total">
                                    <span>order total</span>
                                    <span>Rs {{$cart->getTotalPrice()}}</span>
                                </div>
                                <ul class="payment__btn">
                                    <li class="active"><a href="{{route('checkout')}}">payment</a></li>
                                    <li><a href="{{route('products.all')}}">continue shopping</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <p class="alert alert-danger" >No products in the cart<a href="{{route('products.all')}}"> Buy some products" </a></p>
    @endif
    @include('partials.letter')
    @include('partials.footer')
    @include('partials.js')
</body>
</html>
