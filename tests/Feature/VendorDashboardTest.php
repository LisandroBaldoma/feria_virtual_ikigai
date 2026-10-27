<?php

use App\Models\Store;
use App\Models\User;
use Inertia\Testing\AssertableInertia as Assert;

test('guests are redirected to login when visiting the vendor dashboard', function () {
    $this->get(route('vendor.dashboard'))
        ->assertRedirect(route('login'));
});

test('users without a store are redirected to store creation', function () {
    $this->actingAs(User::factory()->create())
        ->get(route('vendor.dashboard'))
        ->assertRedirect(route('stores.create'));
});

test('a provider sees only their store in the vendor dashboard', function () {
    $store = Store::factory()->create([
        'title' => 'Taller propio',
        'subdomain' => 'taller-propio',
        'approved_at' => now(),
    ]);
    $otherStore = Store::factory()->create(['title' => 'Tienda ajena']);

    $this->actingAs($store->user)
        ->get(route('vendor.dashboard'))
        ->assertInertia(fn (Assert $page) => $page
            ->component('vendor-dashboard')
            ->where('store.title', 'Taller propio')
            ->where('store.subdomain', 'taller-propio')
            ->where('store.isApproved', true)
            ->missing('store.user_id')
            ->where('store.title', fn (string $title) => $title !== $otherStore->title)
        );
});
