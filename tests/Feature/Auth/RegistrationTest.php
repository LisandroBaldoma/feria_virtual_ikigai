<?php

use Laravel\Fortify\Features;

beforeEach(function () {
    $this->skipUnlessFortifyHas(Features::registration());
});

test('registration screen can be rendered', function () {
    $response = $this->get(route('register'));

    $response->assertOk();
});

test('new users can register', function () {
    $response = $this->post(route('register.store'), [
        'name' => 'Test User',
        'last_name' => 'Example',
        'username' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $this->assertDatabaseHas('users', [
        'email' => 'test@example.com',
        'last_name' => 'Example',
        'username' => 'Test User',
    ]);
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('registration requires a valid username', function () {
    $response = $this->post(route('register.store'), [
        'name' => 'Test',
        'last_name' => 'User',
        'username' => '!',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertSessionHasErrors('username');
});
