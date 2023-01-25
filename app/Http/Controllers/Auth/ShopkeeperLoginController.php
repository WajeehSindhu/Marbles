<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ShopkeeperLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:shopkeeper', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.shopkeeper-login');
    }

    public function login(Request $request)
    {
        //return true;
        $this->validate($request, [
            'email' =>'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('shopkeeper')->attempt(['email' => $request->email, 'password' => $request->password] , $request->remember))
        {
            return redirect()->intended(route('shopkeeper.dashboard'));
        }
        else {
            return redirect('shopkeeper/login')->with('login', 'You have been deactivated by the Admin! Please contact your Admin.');
        }

        return redirect()->back()->withInput($request->only('email' , 'remember'));

    }



    public function logout()
    {
        Auth::guard('shopkeeper')->logout();
        return redirect('/');


    }
}
