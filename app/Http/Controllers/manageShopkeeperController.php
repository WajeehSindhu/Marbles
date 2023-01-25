<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shopkeeper;
use App\User;
use Illuminate\Http\Request;

class manageShopkeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        //
        $shopkeepers = Shopkeeper::paginate(5);
        return view('admin.Saccounts', compact('shopkeepers'));
    }

    public function trash()
    {
        $shopkeepers = Shopkeeper::onlyTrashed()->paginate(5);
        return view('admin.Saccounts' , compact('shopkeepers'));
    }

    public function Activate($id)
    {
        $shopkeeper = Shopkeeper::onlyTrashed()->findOrFail($id);
        if ($shopkeeper->restore())
        {
            return back()->with('message' ,'Shopkeeper activated successfully');
        }
        else
            return back()->with('message' ,'Error ');
    }

    public function Deactivate(Shopkeeper $shopkeeper)
    {
        //
        if ($shopkeeper->delete())
        {
            return back()->with('message' ,'Shopkeeper Deactivated succesfully');
        }
        else
            return back()->with('message' ,'Error ');
    }

    public function destroy($id)
    {
        //
        $account = Shopkeeper::findorfail($id);
        $account->forceDelete();

        return back()->with('success', 'Shopkeeper deleted!');
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
    public function store(Request $request)
    {
        //
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

}
