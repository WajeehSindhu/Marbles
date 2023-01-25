<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminChangePasswordController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('auth.passwords.AdminChange');
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
            $user = Admin::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('admin.login')->with('Success' , "Password changed Successfully");
        }
        else
        {
            return redirect()->back()->with('Unsuccess' , "Current Password is Invalid");
        }
    }
}
