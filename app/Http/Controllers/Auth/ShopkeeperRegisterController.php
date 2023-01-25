<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Shopkeeper;

class ShopkeeperRegisterController extends Controller
{
    //
    use RegistersUsers;

    /*public function __construct()
    {
        $this->middleware('guest:shopkeeper');
    }*/

    public function showRegistrationForm()
    {
        return view('auth.shopkeeper-register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($shopkeeper = $this->create($request->all())));

        $this->guard()->login($shopkeeper);

        return $this->registered($request, $shopkeeper)
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
            return Shopkeeper::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'avatar' => '/images/' . $avatarname,
            ]);
        }
        return Shopkeeper::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
