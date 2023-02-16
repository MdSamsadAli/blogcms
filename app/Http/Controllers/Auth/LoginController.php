<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        //
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        //
        $credentials =
        [
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ];
        // dd($request->all());
        // $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        // return redirect()->route('login');
        else{
            return("something went wrong");
        }
    }

    
    public function logout()
    {
        //
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('auth.login');
    }
}
