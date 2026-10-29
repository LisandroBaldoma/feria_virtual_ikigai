<?php

use App\Models\Category;
use App\Models\Store;
use App\Models\User;
use Inertia\Testing\AssertableInertia as Assert;

test('guests are redirected to login when visiting the platform owner dashboard', function () {
    $this->get(route('owner.dashboard'))
        ->assertRedirect(route('login'));
});

test('users who do not own the platform cannot visit the platform owner dashboard', function () {
    $this->actingAs(User::factory()->create())
        ->get(route('owner.dashboard'))
        ->assertForbidden();
});

test('the platform owner sees global marketplace information', function () {
    Category::factory()->count(2)->create();
    Store::factory()->create(['approved_at' => now()]);
    Store::factory()->create();

    $this->actingAs(User::factory()->platformOwner()->create())
        ->get(route('owner.dashboard'))
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('platform-owner-dashboard')
            ->where('overview.stores', 2)
            ->where('overview.approvedStores', 1)
            ->where('overview.providers', 2)
            ->where('overview.categories', 4)
        );
});
