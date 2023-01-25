<footer id="htc__footer">
    <!-- Start Footer Widget -->
    <div class="footer__container bg__cat--1">
        <div class="container">
            <div class="row">
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer">
                        <h2 class="title__line--2">ABOUT US</h2>
                        <div class="ft__details">
                            <p>Our Marbles provides customers with the best ever service, we have different products
                                from different shopkeepers.</p>
                            <div class="ft__social__link">
                                <ul class="social__link">
                                    <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                    <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">my account</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="{{route('cart.all')}}">My Cart</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('checkout')}}">Checkout</a></li>
                                <li><a href="{{route('live_search')}}">Live Search</a></li>
                                <li><a href="{{route('calculate')}}">Predictor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">Our service</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="{{route('cart.all')}}">My Cart</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('checkout')}}">Checkout</a></li>
                                <li><a href="{{route('live_search')}}">Live Search</a></li>
                                <li><a href="{{route('calculate')}}">Predictor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
                <!-- Start Single Footer Widget -->
                <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">NEWSLETTER </h2>
                        <div class="ft__inner">
                            <div class="news__input">
                                <form method="post" action="{{url('letter/send')}}">
                                    {{ csrf_field() }}
                                    <input type="text" name="email" class="form-control" placeholder="Your Mail*" required>
                                    <div class="send__btn">
                                        <input type="submit" name="send" value="Send" class="btn btn-info" style="background-color: #c2a476;
                    border-color: #8a6d3b;">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Footer Widget -->
            </div>
        </div>
    </div>
    <!-- End Footer Widget -->
    <!-- Start Copyright Area -->
    <!-- End Copyright Area -->
</footer>
