<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Shopkeeper;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class ManageAccountsController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth:admin');
    }*/
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
        $users = User::paginate(5);
        return view('admin.accounts', compact('users'));
    }


   /* public function Sindex()
    {
        //
        $shopkeepers = Shopkeeper::all();
        return view('admin.Saccounts', compact('shopkeepers'));
    }*/

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


     public function trash()
    {
        $users = User::onlyTrashed()->paginate(3);
        return view('admin.accounts', compact('users'));
    }

    public function DeactivateUser(User $user)
    {
        if($user->delete()){
            return back()->with('message','User Successfully DeActivated!');
        }else{
            return back()->with('message','Error DeActivate');
        }
    }


    public function ActivateUser($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        if($user->restore())
            return back()->with('message','User Successfully Activated!');
        else
            return back()->with('message','Error Activate');
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
        $account = User::findorfail($id);
        $account->forceDelete();

        return back()->with('success', 'User deleted!');
    }






}
