<?php

use App\Models\SocialIdentity;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User as GoogleUser;

test('new Google users complete their registration before accessing the dashboard', function () {
    Socialite::fake('google', GoogleUser::fake([
        'id' => 'google-123',
        'email' => 'google@example.com',
        'name' => null,
    ]));

    $response = $this->get(route('google.callback'));

    $response->assertRedirect(route('registration.complete'));
    $this->assertAuthenticated();
    $this->assertDatabaseHas('social_identities', [
        'provider' => 'google',
        'provider_id' => 'google-123',
    ]);
});

test('a linked Google identity authenticates its associated user', function () {
    $user = User::factory()->create();
    SocialIdentity::factory()->for($user)->create(['provider_id' => 'google-456']);
    Socialite::fake('google', GoogleUser::fake(['id' => 'google-456', 'email' => $user->email]));

    $this->get(route('google.callback'))
        ->assertRedirect(route('dashboard'));

    $this->assertAuthenticatedAs($user);
});

test('Google does not automatically link an existing email account', function () {
    $user = User::factory()->create(['email' => 'existing@example.com']);
    Socialite::fake('google', GoogleUser::fake(['id' => 'google-789', 'email' => $user->email]));

    $this->get(route('google.callback'))
        ->assertRedirect(route('login'));

    $this->assertGuest();
    $this->assertDatabaseMissing('social_identities', ['provider_id' => 'google-789']);
});

test('Google users can finish registration with their missing profile data', function () {
    $user = User::factory()->create([
        'name' => null,
        'last_name' => null,
        'username' => null,
        'password' => null,
    ]);

    $this->actingAs($user)
        ->patch(route('registration.complete.update'), [
            'name' => 'Google',
            'last_name' => 'User',
            'username' => 'Google User',
        ])
        ->assertRedirect(route('dashboard'));

    expect($user->refresh()->hasCompletedProfile())->toBeTrue();
});

test('authenticated users can link a Google identity from their profile', function () {
    $user = User::factory()->create();
    Socialite::fake('google', GoogleUser::fake(['id' => 'google-999', 'email' => 'other@example.com']));

    $this->actingAs($user)
        ->get(route('google.link'))
        ->assertRedirect('https://socialite.fake/google/authorize');

    $this->actingAs($user)
        ->get(route('google.callback'))
        ->assertRedirect(route('profile.edit'));

    $this->assertDatabaseHas('social_identities', [
        'user_id' => $user->id,
        'provider' => 'google',
        'provider_id' => 'google-999',
    ]);
});
