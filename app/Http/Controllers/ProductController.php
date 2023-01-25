<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Http\Requests\StoreProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:shopkeeper');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(5);
        return view('shopkeeper.products.index' , compact('products'));
    }

    public function trash()
    {
        $products = Product::with('categories')->onlyTrashed()->paginate(3);
        return view('shopkeeper.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('shopkeeper.products.create' ,compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        //
        if ($request->has('thumbnail'))
        {
            $extension =".".$request->thumbnail->getClientOriginalExtension();
            $name =basename($request->thumbnail->getClientOriginalName() , $extension).time();
            $name =$name.$extension;
            $path = $request->thumbnail->store('uploads');


        }
        $product = Product::create([

            'title'=>$request->title,
            'shopkeeper'=>$request->shopkeeper,
            'thumbnail'=>$path,
            'status'=>$request->status,
            'options' => isset($request->extras) ? json_encode($request->extras) : null,
            'featured'=>($request->featured)?$request->featured:0,
            'price'=>$request->price,
            'discount'=>$request->discount?$request->discount:0,
            'discount_price'=>($request->discount_price)?$request->discount_price:0,
        ]);
        if ($product )
        {
            $product->categories()->attach($request->category_id);
            return back()->with('message' , 'Product Added');
        }else
        {
            return back()->with('message' , 'Error Product Added');
        }
        $product->save();

        //echo $name;
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories =Category::all();
        return view('shopkeeper.products.create' , compact('product' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $path = 'images/logo.png';
        if($request->has('thumbnail')){
            $extension = ".".$request->thumbnail->getClientOriginalExtension();
            $name = basename($request->thumbnail->getClientOriginalName(), $extension).time();
            $name = $name.$extension;
            $path = $request->thumbnail->storeAs('images', $name, 'public');
        }
        $product->title =$request->title;
        //$product->slug = $request->slug;
        $product->shopkeeper = $request->shopkeeper;
        $product->status = $request->status;
        $product->featured = ($request->featured) ? $request->featured : 0;
        $product->price = $request->price;
        $product->discount = $request->discount ? $request->discount : 0;
        $product->discount_price = ($request->discount_price) ? $request->discount_price : 0;
        $product->categories()->detach();

        if($product->save()){
            $product->categories()->attach($request->category_id);
            return back()->with('message', "Product Successfully Updated!");
        }else{
            return back()->with('message', "Error Updating Product");
        }
    }

    public function recoverProduct($id)
    {
        $product = Product::with('categories')->onlyTrashed()->findOrFail($id);
        if($product->restore())
            return back()->with('message','Product Successfully Restored!');
        else
            return back()->with('message','Error Restoring Product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if($product->categories()->detach() && $product->forceDelete()){
            Storage::delete($product->thumbnail);
            return back()->with('message','Product Successfully Deleted!');
        }else{
            return back()->with('message','Error Deleting Product');
        }
    }

    public function remove(Product $product)
    {
        if($product->delete()){
            return back()->with('message','Product Successfully Trashed!');
        }else{
            return back()->with('message','Error Deleting Product');
        }
    }
}
