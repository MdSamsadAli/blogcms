<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

use App\Services\UserService;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerUser(RegisterRequest $request, UserService $userService)
    {
        // dd($request->all());
        // $user = User::create(request(['username', 'email', 'password']));
        // $user = User::create($request->validated());
        $user = $userService->createUser($request);
        auth()->login($user);
        return redirect()->route("login");
    }

}
