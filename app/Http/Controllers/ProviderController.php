<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Models\User;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $Socialuser = Socialite::driver($provider)->user();
            if (User::where('email', $Socialuser->getEmail())->exists()) {
                $user = User::where([
                    'provider' => $provider,
                    'provider_id' => $Socialuser->id,
                ])->first();
                if ($user) {
                    Auth::login($user);
                    return redirect('/home');
                } else {
                    return redirect('/login');
                }
            } else {
                $user = User::create([
                    'provider' => $provider,
                    'provider_id' => $Socialuser->id,
                    'name' => $Socialuser->name,
                    'avatar' => $Socialuser->avatar,
                    'email' => $Socialuser->email,
                    'provider_token' => $Socialuser->token,
                    'email_verified_at' => now(),
                ]);
                $user->assignRole('user');

                Auth::login($user);
                return redirect('/home');
            }
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Failed to authenticate with ' . ucfirst($provider) . '. Please try again.');
        }
    }
}
