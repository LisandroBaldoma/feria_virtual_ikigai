<?php

use App\Models\Category;
use App\Models\Store;
use App\Models\User;
use Inertia\Testing\AssertableInertia as Assert;

test('guests are redirected to login when managing categories', function () {
    $this->get(route('categories.index'))
        ->assertRedirect(route('login'));
});

test('users who do not own the platform cannot manage categories', function () {
    $user = User::factory()->create();
    $category = Category::factory()->create();

    $this->actingAs($user)
        ->get(route('categories.index'))
        ->assertForbidden();

    $this->actingAs($user)
        ->post(route('categories.store'), ['name' => 'Cerámica'])
        ->assertForbidden();

    $this->actingAs($user)
        ->patch(route('categories.update', $category), ['name' => 'Textiles'])
        ->assertForbidden();

    $this->actingAs($user)
        ->delete(route('categories.destroy', $category))
        ->assertForbidden();
});

test('the platform owner sees categories with their store counts', function () {
    $category = Category::factory()->create(['name' => 'Cerámica', 'slug' => 'ceramica']);
    Store::factory()->count(2)->for($category)->create();
    $emptyCategory = Category::factory()->create(['name' => 'Textiles', 'slug' => 'textiles']);

    $this->actingAs(User::factory()->platformOwner()->create())
        ->get(route('categories.index'))
        ->assertInertia(fn (Assert $page) => $page
            ->component('categories/index')
            ->has('categories', 2)
            ->where('categories.0.name', 'Cerámica')
            ->where('categories.0.stores_count', 2)
            ->where('categories.1.id', $emptyCategory->id)
            ->where('categories.1.stores_count', 0)
        );
});

test('the platform owner can create and update a category', function () {
    $owner = User::factory()->platformOwner()->create();

    $this->actingAs($owner)
        ->post(route('categories.store'), ['name' => 'Arte y diseño'])
        ->assertRedirect(route('categories.index'));

    $category = Category::query()->where('slug', 'arte-y-diseno')->firstOrFail();

    $this->actingAs($owner)
        ->patch(route('categories.update', $category), ['name' => 'Arte contemporáneo'])
        ->assertRedirect(route('categories.index'));

    expect($category->refresh())
        ->name->toBe('Arte contemporáneo')
        ->slug->toBe('arte-contemporaneo');
});

test('a category name and generated slug must be unique', function () {
    $owner = User::factory()->platformOwner()->create();
    Category::factory()->create(['name' => 'Arte y diseño', 'slug' => 'arte-y-diseno']);
    Category::factory()->create(['name' => 'Arte y decoracion', 'slug' => 'arte-y-decoracion']);

    $this->actingAs($owner)
        ->from(route('categories.index'))
        ->post(route('categories.store'), ['name' => 'Arte y diseño'])
        ->assertRedirect(route('categories.index'))
        ->assertSessionHasErrors('name');

    $this->actingAs($owner)
        ->from(route('categories.index'))
        ->post(route('categories.store'), ['name' => 'Arte y decoración'])
        ->assertRedirect(route('categories.index'))
        ->assertSessionHasErrors('slug');
});

test('the platform owner can only delete a category without stores', function () {
    $owner = User::factory()->platformOwner()->create();
    $emptyCategory = Category::factory()->create();
    $usedCategory = Category::factory()->create();
    Store::factory()->for($usedCategory)->create();

    $this->actingAs($owner)
        ->delete(route('categories.destroy', $emptyCategory))
        ->assertRedirect(route('categories.index'));

    $this->assertDatabaseMissing(Category::class, ['id' => $emptyCategory->id]);

    $this->actingAs($owner)
        ->from(route('categories.index'))
        ->delete(route('categories.destroy', $usedCategory))
        ->assertRedirect(route('categories.index'))
        ->assertSessionHasErrors('category');

    $this->assertDatabaseHas(Category::class, ['id' => $usedCategory->id]);
});
