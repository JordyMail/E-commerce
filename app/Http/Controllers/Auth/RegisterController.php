<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate and create the user
        $user = User::create($request->all());

        // Log the user in
        Auth::login($user);

        // Redirect to the home page
        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate and log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home'); // Redirect to the home page
        }

        return redirect()->route('login')->withErrors('Invalid credentials');
    }
}
