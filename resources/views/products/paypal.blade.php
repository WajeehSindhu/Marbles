@include('partials.css')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_lfYnOnMTfWLmwajW4tQpIkAA00gLszIOqP');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
<div class="row">
    <div class="container">
        <form action="{{route('payment.store')}}" method="POST" id="payment-form">
            {{csrf_field()}}
            <span class="payment-errors"></span>

            <div class="form-row">
                <label>
                    <span>Card Number</span>
                    <input type="text" size="20" data-stripe="number">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Expiration (MM/YY)</span>
                    <input type="text" size="2" data-stripe="exp_month">
                    <span> / </span>
                    <input type="text" size="2" data-stripe="exp_year">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>CVC</span>
                    <input type="text" size="4" data-stripe="cvc">
                </label>
            </div>


            <input type="submit" class="submit button success" value="Submit Payment">
        </form>
    </div>
</div>
