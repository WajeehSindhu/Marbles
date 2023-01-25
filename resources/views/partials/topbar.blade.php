<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
    <div class="container">
        <div class="row">
            <div class="menumenu__container clearfix">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('assetss/images/logo/logo.png')}}" alt="logo images"></a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                    <nav class="main__menu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li class="drop"><a href="{{route('home')}}">Home</a></li>
                            <li class="drop"><a href="#">Products</a>
                                <ul class="dropdown">
                                <li><a href="{{route('products.all')}}">Products</a></li>
                            </ul>
                        </li>
                        <li class="drop"><a href="{{route('cart.all')}}">Cart</a>
                        <ul class="dropdown">
                            <li><a href="{{route('checkout')}}">Checkout</a></li>
                        </ul>
                    </li>
                            <li class="drop"><a href="#">Features</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('calculate')}}">Predictor</a></li>
                                    <li><a href="{{route('live_search')}}">Search Products</a></li>
                                    <li><a href="{{route('design')}}">Request Design</a></li>
                                </ul>
                            </li>
                    <li class="drop"><a href="{{route('contact')}}">Contact Us</a></li>
                    <li class="drop"><a href="{{route('about')}}">About Us</a></li>
                            <li class="drop"><a href="#">Profile</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('login')}}"><img src="{{asset(Auth::user()->avatar)}}" style="height: 40px; width: 40px; border-radius: 50%;"> {{Auth::user()->name}}</a></li>
                                    <li><a href="{{route('cart.all')}}"><i class="icon-handbag icons"> Cart</i></a></li>
                                    <li><a href="{{route('user.logout')}}"><i class="fa fa-sign-out"> Logout</i></a></li>
                                    <li><a href="{{route('password.change')}}"><i class="fa fa-repeat"> Change Password</i></a></li>
                                </ul>
                            </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="mobile-menu-area"></div>
</div>
</div>
