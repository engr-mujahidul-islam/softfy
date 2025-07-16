<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:seller'])->prefix('seller')->name('seller.')->group(function () {
    
    Route::get('/dashboard', [App\Http\Controllers\Seller\DashboardController::class, 'index'])->name('dashboard');

    // Products
    Route::resource('products', App\Http\Controllers\Seller\ProductController::class);
    Route::resource('versions', App\Http\Controllers\Seller\VersionController::class)->only(['store', 'update', 'destroy']);

    // Payouts
    Route::get('/payouts', [App\Http\Controllers\Seller\PayoutController::class, 'index'])->name('payouts.index');
    Route::post('/payouts/request', [App\Http\Controllers\Seller\PayoutController::class, 'request'])->name('payouts.request');
});
