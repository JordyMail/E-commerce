<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        // Example logic to find or create a user
        $authUser = User::firstOrCreate(
            ['email' => $user->getEmail()],
            ['name' => $user->getName()]
        );

        Auth::login($authUser);

        return redirect()->route('home'); // Redirect to a desired route
    }
}