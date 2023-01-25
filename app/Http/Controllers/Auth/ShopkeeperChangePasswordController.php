<?php

namespace App\Http\Controllers\Auth;

use App\Shopkeeper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ShopkeeperChangePasswordController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:shopkeeper');
    }

    public function index()
    {
        return view('auth.passwords.ShopkeeperChange');
    }
    public function changePassword(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);
        $hashedPassword = Auth::user()->password;
        //return $hashedPassword;
        if (Hash::check($request->oldpassword , $hashedPassword))
        {
            $user = Shopkeeper::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('shopkeeper.login')->with('Success' , "Password changed Successfully");
        }
        else
        {
            return redirect()->back()->with('Unsuccess' , "Current Password is Invalid");
        }
    }
}
