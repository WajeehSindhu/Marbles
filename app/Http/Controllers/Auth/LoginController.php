<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout' , 'userLogout');
    }

    /*public function login(Request $request)
    {
        //return true;
        $this->validate($request, [
            'email' =>'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password] , $request->remember))
        {
            return redirect()->intended(route('home'));
        }
        else {
            return redirect('/login')->with('login', 'You have been deactivated by the Admin! Please contact your Admin.');
        }

        return redirect()->back()->withInput($request->only('email' , 'remember'));

    }*/
    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');



    }
}
