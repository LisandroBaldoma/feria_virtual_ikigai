<?php

use App\Http\Controllers\Auth\CompleteRegistrationController;
use App\Http\Controllers\Auth\GoogleAuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlatformOwnerDashboardController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\VendorDashboardController;
use App\Http\Middleware\EnsureProfileIsComplete;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::view('/home', 'home')->name('reference');
Route::view('/product-detail-digital', 'product-detail-digital')->name('product-detail-digital');
Route::view('/product-detail-fisico', 'product-detail-fisico')->name('product-detail-fisico');
Route::view('/store-front', 'store-front')->name('store-front');
Route::view('/tiendas-stores', 'tiendas-stores')->name('tiendas-stores');

Route::inertia('/home-react', 'home')->name('home-react');
Route::inertia('/product-detail-digital-react', 'product-detail-digital')->name('product-detail-digital-react');
Route::inertia('/product-detail-fisico-react', 'product-detail-fisico')->name('product-detail-fisico-react');
Route::inertia('/store-front-react', 'store-front')->name('store-front-react');
Route::inertia('/tiendas-stores-react', 'tiendas-stores')->name('tiendas-stores-react');

Route::inertia('/component-showcase', 'component-showcase')->name('component-showcase');

Route::get('auth/google', [GoogleAuthenticationController::class, 'redirect'])->name('google.redirect');
Route::get('auth/google/callback', [GoogleAuthenticationController::class, 'callback'])->name('google.callback');

Route::middleware('auth')->group(function () {
    Route::get('complete-registration', [CompleteRegistrationController::class, 'edit'])->name('registration.complete');
    Route::patch('complete-registration', [CompleteRegistrationController::class, 'update'])->name('registration.complete.update');
});

Route::middleware(['auth', 'can:view-platform-owner-dashboard'])->group(function () {
    Route::get('panel-plataforma', PlatformOwnerDashboardController::class)->name('owner.dashboard');
    Route::resource('panel-plataforma/categorias', CategoryController::class)
        ->only(['index', 'store', 'update', 'destroy'])
        ->parameters(['categorias' => 'category'])
        ->names('categories');
});

Route::middleware(['auth', EnsureProfileIsComplete::class])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
    Route::get('panel-proveedor', VendorDashboardController::class)->name('vendor.dashboard');

    Route::get('mi-tienda/crear', [StoreController::class, 'create'])->name('stores.create');
    Route::post('mi-tienda', [StoreController::class, 'store'])->name('stores.store');
    Route::get('mi-tienda', [StoreController::class, 'edit'])->name('stores.edit');
    Route::patch('mi-tienda', [StoreController::class, 'update'])->name('stores.update');
});

require __DIR__.'/settings.php';
