<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\StoreOrder;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\ExpressCheckout;
use Stripe\Charge;
use Stripe\Stripe;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        if(!Session::has('cart') || empty(Session::get('cart')->getContents()))
        {
            return redirect('products')->with('message' , 'No products in the cart');
        }
        $cart = Session::get('cart');
        return view('products.checkout', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrder $request)
    {
        //
        $cart = [];
        $order = '';
        $checkout = '';
        $error = '';
        $success = '';
        if (Session::has('cart'))
        {
            $cart =Session::get('cart');
        }
        if ($request->shipping_address) {
            $customer = [
                "billing_firstName" => $request->billing_firstName,
               // "billing_lastName" => $request->billing_lastName,
                // 'username' => $request->username,
                "email" => $request->email,
                "billing_address1" => $request->billing_address1,
                "billing_address2" => $request->billing_address2,
                "billing_country" => $request->billing_country,
                "billing_state" => $request->billing_state,
                "billing_city" => $request->billing_city,
                "billing_zip" => $request->billing_zip,
            ];
        }else
        {
            $customer = [
                "billing_firstName" => $request->billing_firstName,
               // "billing_lastName" => $request->billing_lastName,
                //"username" => $request->username,
                "email" => $request->email,
                "billing_address1" => $request->billing_address1,
                "billing_address2" => $request->billing_address2,
                "billing_country" => $request->billing_country,
                "billing_state" => $request->billing_state,
                "billing_city" => $request->billing_city,
                "billing_zip" => $request->billing_zip,
            ];
        }
        DB::beginTransaction();
        $checkout = Customer::create($customer);
        foreach ($cart->getContents() as $id => $product) {
            $products = [
                'user_id' => $checkout->id,
                'product_id' => $product['product']->id,
                'title' => $product['product']->title,
                'qty' => $product['qty'],
                'status' => 'done',
                'price' => $product['price'],
                'payment_id' => 0,
            ];
            $order = Order::create($products);
        }
        if ($checkout && $order)
        {
            DB::commit();
            $request->session()->forget('cart');
            //$request->session()->flush();
            return redirect('products')->with('message' , 'Your Order successfully processs');
        }
        else
        {
            DB::rollback();
            return redirect('checkout')->with('message' , 'Invalid Activity!');
        }



    }

    public function payment()
    {
        return view('products.paypal');
    }
    public function storePayment(Request $request)
    {
        $cart = [];
        $order = '';
        $checkout = '';
        $error = '';
        $success = '';

        Stripe::setApiKey('sk_test_p0xuhINNHRf6Birnl92Bb3s700RRJzOEbB');
        $token = $request->stripeToken;

// Create a charge: this will charge the user's card
        try {
            if (Session::has('cart')) {
                $cart =Session::get('cart');
                $charge = \Stripe\Charge::create(array(
                    "amount" =>$cart->getTotalPrice() * 100, // Amount in cents
                    "currency" => "usd",
                    "source" => $token,
                    "description" => "Example charge"
                ));
            }
        } catch (\Stripe\Error\Card $e) {
            // The card has been declined
        }
        //Create the order


        //redirect user to some page
        return redirect('products')->with('message' , 'Your Order successfully processs');

    }

    public function paywithPaypal()
    {
        $provider = new ExpressCheckout;
        $cart = [];
        $order = '';
        $checkout = '';
        $error = '';
        $success = '';
        $data = [];
        $data['items'] = [];
        if (Session::has('cart'))
        {
            $cart =Session::get('cart');
        }
        foreach ($cart->getContents() as $id => $product) {
            $itemDetail = [
                'name' => $product['product']->title,
                'qty' => $product['qty'],
                'price' => $product['price'],
            ];
            $data['items'][]=$itemDetail;
           /* $order = Order::create($itemDetail);*/
        }

        dd($data);




        $data['invoice_id'] = uniqid();
        $data['invoice_description'] = "Order Invoice";
        $data['return_url'] = route('payment.paypalSuccess');
        $data['cancel_url'] = route('cart.all');

        $total = $itemDetail['price'];
        $data['total'] = $total;

        $response = $provider->setExpressCheckout($data);
        // This will redirect user to PayPal
        return redirect($response['paypal_link']);



    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
