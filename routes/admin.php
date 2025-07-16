<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Product approvals
    Route::get('/products/pending', [App\Http\Controllers\Admin\ProductController::class, 'pending'])->name('products.pending');
    Route::post('/products/{id}/approve', [App\Http\Controllers\Admin\ProductController::class, 'approve'])->name('products.approve');

    // Users
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);

    // Offline payment approvals
    Route::get('/offline-payments', [App\Http\Controllers\Admin\OfflinePaymentController::class, 'index'])->name('offline.index');
    Route::post('/offline-payments/{id}/approve', [App\Http\Controllers\Admin\OfflinePaymentController::class, 'approve'])->name('offline.approve');
});
