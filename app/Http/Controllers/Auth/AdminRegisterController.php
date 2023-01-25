<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


use App\Admin;

class AdminRegisterController extends Controller
{
    //
    use RegistersUsers;


    /*public function __construct()
    {
        $this->middleware('guest:shopkeeper');
    }*/

    public function showRegistrationForm()
    {
        return view('auth.admin-register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['sometimes' , 'image' , 'mimes:jpg,jpeg,bmp,png,svg' , 'max:5000'],
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($admin = $this->create($request->all())));

        $this->guard()->login($admin);

        return $this->registered($request, $admin)
            ?: redirect($this->redirectPath());
    }

    protected function create(array $data)
    {
        if (request()->has('avatar'))
        {
            $avataruploaded = request()->file('avatar');
            $avatarname =time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath =public_path ('/images');
            $avataruploaded->move($avatarpath , $avatarname);
            return Admin::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'avatar' => '/images/' . $avatarname,
            ]);
        }


        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
