<?php

use App\Models\Category;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

test('guests are redirected to login when managing a store', function () {
    $this->get(route('stores.create'))
        ->assertRedirect(route('login'));
});

test('authenticated users can create a digital or physical store', function (string $type) {
    Storage::fake('public');

    $user = User::factory()->create();
    $category = Category::factory()->create();

    $this->actingAs($user)
        ->post(route('stores.store'), [
            'title' => 'Taller Raíz',
            'description' => 'Piezas hechas a mano.',
            'subdomain' => "taller-raiz-{$type}",
            'type' => $type,
            'category_id' => $category->id,
            'profile_image' => UploadedFile::fake()->image('perfil.png'),
        ])
        ->assertRedirect(route('stores.edit'));

    $store = Store::query()->whereBelongsTo($user)->firstOrFail();

    expect($store)
        ->title->toBe('Taller Raíz')
        ->type->toBe($type)
        ->category_id->toBe($category->id)
        ->approved_at->toBeNull();

    Storage::disk('public')->assertExists($store->profile_image_path);
})->with(['digital', 'physical']);

test('a user cannot create a second store', function () {
    $user = User::factory()->create();
    Store::factory()->for($user)->create();
    $category = Category::factory()->create();

    $this->actingAs($user)
        ->post(route('stores.store'), [
            'title' => 'Otra tienda',
            'subdomain' => 'otra-tienda',
            'type' => 'digital',
            'category_id' => $category->id,
        ])
        ->assertForbidden();
});

test('a subdomain must be unique', function () {
    $store = Store::factory()->create(['subdomain' => 'taller-raiz']);
    $category = Category::factory()->create();

    $this->actingAs(User::factory()->create())
        ->from(route('stores.create'))
        ->post(route('stores.store'), [
            'title' => 'Taller Raíz',
            'subdomain' => $store->subdomain,
            'type' => 'physical',
            'category_id' => $category->id,
        ])
        ->assertRedirect(route('stores.create'))
        ->assertSessionHasErrors('subdomain');
});

test('a missing temporary profile image returns a validation error', function () {
    $image = UploadedFile::fake()->image('perfil.png');
    unlink($image->getPathname());

    $this->actingAs(User::factory()->create())
        ->from(route('stores.create'))
        ->post(route('stores.store'), [
            'title' => 'Taller Raíz',
            'subdomain' => 'taller-raiz',
            'type' => 'digital',
            'category_id' => Category::factory()->create()->id,
            'profile_image' => $image,
        ])
        ->assertRedirect(route('stores.create'))
        ->assertSessionHasErrors('profile_image');
});

test('a provider can update only editable information in their store', function () {
    Storage::fake('public');

    $store = Store::factory()->create([
        'title' => 'Taller anterior',
        'description' => 'Descripción anterior.',
        'profile_image_path' => 'stores/profile-images/anterior.png',
        'subdomain' => 'taller-original',
        'type' => 'digital',
    ]);
    Storage::disk('public')->put($store->profile_image_path, 'previous image');

    $this->actingAs($store->user)
        ->patch(route('stores.update'), [
            'title' => 'Taller renovado',
            'description' => 'Nueva descripción.',
            'subdomain' => 'otro-subdominio',
            'type' => 'physical',
            'category_id' => Category::factory()->create()->id,
            'profile_image' => UploadedFile::fake()->image('nueva.png'),
        ])
        ->assertRedirect(route('stores.edit'));

    $store->refresh();

    expect($store)
        ->title->toBe('Taller renovado')
        ->description->toBe('Nueva descripción.')
        ->subdomain->toBe('taller-original')
        ->type->toBe('digital');

    Storage::disk('public')->assertMissing('stores/profile-images/anterior.png');
    Storage::disk('public')->assertExists($store->profile_image_path);
});

test('a provider cannot update another providers store', function () {
    $ownedStore = Store::factory()->create(['title' => 'Tienda propia']);
    $otherStore = Store::factory()->create(['title' => 'Tienda ajena']);

    $this->actingAs($ownedStore->user)
        ->patch(route('stores.update'), [
            'title' => 'Tienda propia actualizada',
            'description' => 'Actualizada por su proveedor.',
        ])
        ->assertRedirect(route('stores.edit'));

    expect($ownedStore->refresh()->title)->toBe('Tienda propia actualizada');
    expect($otherStore->refresh()->title)->toBe('Tienda ajena');
});
