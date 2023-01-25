<?php

namespace App\Http\Controllers;

use App\Design;
use App\Http\Requests\DesignRequest;
use App\Product;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $designs = Design::all();
        return view('design' , compact('designs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $designs = Design::all();
        return view('design' , compact('designs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesignRequest $request)
    {
        //
        if ($request->has('image'))
        {
            $extension =".".$request->image->getClientOriginalExtension();
            $name =basename($request->image->getClientOriginalName() , $extension).time();
            $name =$name.$extension;
            $path = $request->image->store('uploads');


        }
        $design = new Design([
            'name'    =>  $request->get('name'),
            'description'     =>  $request->get('description'),
            'category'    =>  $request->get('category'),
            'image'    =>  $path,
            'contact'    =>  $request->get('contact'),
        ]);
        $design->save();
        return redirect()->route('design')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
