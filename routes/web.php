<?php

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
