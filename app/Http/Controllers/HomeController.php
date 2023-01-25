<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['verified' , 'auth']);
    }

    public function show(Product $product)
    {
        //
        //dd(Session::get('cart'));
        $categories = Category::all();
        $products =Product::all();
        return view('products.all' , compact('categories' , 'products'));
    }
    public function single(Product $product)
    {
        return view('products.single' , compact('product'));
    }

    public function addToCart(Product $product ,Request $request)
    {
        //dd(Session::get('cart'));
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $qty =$request->qty ? $request->qty : 1;
        $cart =new Cart($oldCart);
        $cart->addProduct($product , $qty);
        Session::put('cart' , $cart);
        return back()->with('message' , "$product->title has been successfully added to cart");
    }

    public function cart()
    {

        if(!Session::has('cart'))
        {
            return view('products.cart');
        }
        $cart = Session::get('cart');
        return view('products.cart', compact('cart'));
    }
    public function removeProduct(Product $product)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeProduct($product);
        Session::put('cart', $cart);
        return back()->with('message', "Product $product->title has been successfully removed From the Cart");
    }
    public function updateProduct(Product $product, Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateProduct($product, $request->qty);
        Session::put('cart', $cart);
        return back()->with('message', "Product $product->title has been successfully updated in the Cart");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('home' ,  compact('products'));
    }
}
