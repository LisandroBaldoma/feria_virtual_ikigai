<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialIdentity;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthenticationController extends Controller
{
    public function redirect(Request $request): RedirectResponse
    {
        if ($request->user()) {
            $request->session()->put('google_link_user_id', $request->user()->id);
        }

        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request): RedirectResponse
    {
        $googleUser = Socialite::driver('google')->user();
        $providerId = (string) $googleUser->getId();

        $identity = SocialIdentity::query()
            ->where('provider', 'google')
            ->where('provider_id', $providerId)
            ->first();

        if ($linkUserId = $request->session()->pull('google_link_user_id')) {
            if (! $request->user() || $request->user()->id !== $linkUserId) {
                return to_route('login')->withErrors(['email' => 'Inicia sesión nuevamente para vincular Google.']);
            }

            if ($identity && $identity->user_id !== $request->user()->id) {
                return to_route('profile.edit')->withErrors(['google' => 'Esta cuenta de Google ya está vinculada a otra cuenta.']);
            }

            $request->user()->socialIdentities()->firstOrCreate([
                'provider' => 'google',
                'provider_id' => $providerId,
            ]);

            return to_route('profile.edit');
        }

        if ($identity) {
            Auth::login($identity->user);
            $request->session()->regenerate();

            return $identity->user->hasCompletedProfile()
                ? to_route('dashboard')
                : to_route('registration.complete');
        }

        $email = $googleUser->getEmail();

        if (! $email || User::query()->where('email', $email)->exists()) {
            return to_route('login')->withErrors(['email' => 'Esta cuenta debe vincular Google desde su perfil después de iniciar sesión.']);
        }

        $raw = $googleUser->getRaw();
        $user = User::create([
            'name' => $raw['given_name'] ?? null,
            'last_name' => $raw['family_name'] ?? null,
            'email' => $email,
        ]);

        $user->socialIdentities()->create([
            'provider' => 'google',
            'provider_id' => $providerId,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return to_route('registration.complete');
    }
}
