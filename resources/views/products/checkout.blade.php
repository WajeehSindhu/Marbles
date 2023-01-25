<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <title>Our Marbles</title>
        <style>
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <h2>Checkout Form</h2>
        <div class="row">
            <div class="col-50">
                <div class="container">
                    <form class="needs-validation" action="{{route('checkout.store')}}" method="post" id="payment-form"novalidate="">
                        @csrf
                        <div class="row">
                            <div class="col-50">
                                <br>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="billing_firstName" name="billing_firstName"
                                >
                                @if($errors->has('billing_firstName'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_firstName')}}
                                </div>
                                @endif
                                <br>
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" >
                                @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{$errors->first('email')}}
                                </div>
                                @endif
                                <br>
                                <label for="adr"><i class="fa fa-address-card-o"></i> Shipping Address</label>
                                <input type="text" id="billing_address1" name="billing_address1" >
                                @if($errors->has('billing_address1'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_address1')}}
                                </div>
                                @endif
                                <br>
                                <label for="badr"><i class="fa fa-address-card-o"></i> Billing Address</label>
                                <input type="text" id="billing_address2" name="billing_address2" >
                                @if($errors->has('billing_address2'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_address2')}}
                                </div>
                                @endif
                                <br>
                                <label for="country"><i class="fa fa-institution"></i> Country</label>
                                <input type="text" id="billing_country" name="billing_country" >
                                @if($errors->has('billing_country'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_country')}}
                                </div>
                                @endif
                                <br>
                                <label for="state"><i class="fa fa-institution"></i> State</label>
                                <input type="text" id="billing_state" name="billing_state" >
                                @if($errors->has('billing_state'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_state')}}
                                </div>
                                @endif
                                <br>
                                <!-- <div class="row"> -->
                                <label for="city">City</label>
                                <input type="text" id="billing_city" name="billing_city">
                                @if($errors->has('billing_city'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_city')}}
                                </div>
                                @endif
                                <br>
                                <label for="zip">Zip</label>
                                <input type="text" id="billing_zip" name="billing_zip" >
                                @if($errors->has('billing_zip'))
                                <div class="alert alert-danger">
                                    {{$errors->first('billing_zip')}}
                                </div>
                                @endif
                                <br>
                                <!--   </div> -->
                            </div>
                            <!--  <div class="col-50">
                            </div> -->
                        </div>
                        <!-- <label>
                            <input type="checkbox" checked="checked" name="sameadr">
                            Shipping address same as billing
                        </label> -->
                        <!-- <script src="https://js.stripe.com/v3/"></script>
                        <div class="form-row">
                            <label for="card-element">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                A Stripe Element will be inserted here.
                            </div>
                            Used to display form errors.
                            <div id="card-errors" role="alert"></div>
                        </div> -->
                        <button class="btn" type="submit">Checkout</button>
                        <div id="paypal-button"></div>
                        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                        <script>
                            paypal.Button.render({
                                env: 'sandbox', // Or 'production'
                                // Set up the payment:
                                // 1. Add a payment callback
                                payment: function(data, actions) {
                                    // 2. Make a request to your server
                                    return actions.request.post('/api/create-payment/')
                                        .then(function(res) {
                                            // 3. Return res.id from the response
                                            return res.id;
                                        });
                                },
                                // Execute the payment:
                                // 1. Add an onAuthorize callback
                                onAuthorize: function(data, actions) {
                                    // 2. Make a request to your server
                                    return actions.request.post('/api/execute-payment/', {
                                        paymentID: data.paymentID,
                                        payerID:   data.payerID
                                    })
                                        .then(function(res) {
                                            // 3. Show the buyer a confirmation message.
                                        });
                                }
                            }, '#paypal-button');
                        </script>
                        <a href="{{url('payment')}}">Pay with Paypal</a>
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <div class="order-details">
                        <h1 class="order-details__title">Your Order Details</h1>
                        @foreach($cart->getContents() as $id => $product)

                        <div class="order-details__item">
                            <div class="single-item">
                                <div class="single-item__thumb">
                                    <img src="{{asset('uploads/'.$product['product']->thumbnail)}}" alt="ordered item" style="height: 50px; width: 50px;">
                                </div>
                                <div class="single-item__content">
                                    <h5>{{$product['product']->title}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="order-details__count">
                            <div class="order-details__count__single">
                                <h5>Price</h5>
                                <span class="price" style="margin-top: -41px;">Rs {{$product['price']}}</span>
                            </div>
                            <div class="order-details__count__single">
                                <h5>Product Quantity</h5>
                                <span class="price" style="margin-top: -41px;">{{$product['qty']}}</span>
                            </div>

                            <div class="order-details__count__single">
                                <h5>Total Quantity</h5>
                                <span class="price" style="margin-top: -41px;">{{$cart->getTotalQty()}}</span>
                            </div>
                        </div>
                        <div class="ordre-details__total">
                            <h5>Order total</h5>
                            <span class="price" style="margin-top: -41px;">Rs {{$cart->getTotalPrice()}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
