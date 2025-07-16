<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer\DashboardController;
use App\Http\Controllers\Buyer\BuyerDashboardController;

// Route::middleware(['auth', 'role:buyer'])->prefix('buyer')->name('buyer.')->group(function () {
    
//     // Route::get('/dashboard', [App\Http\Controllers\Buyer\DashboardController::class, 'index'])->name('dashboard');

//     // Orders
//     Route::get('/orders', [App\Http\Controllers\Buyer\OrderController::class, 'index'])->name('orders.index');

//     // Reviews
//     Route::post('/products/{product}/review', [App\Http\Controllers\Buyer\ReviewController::class, 'store'])->name('reviews.store');

//     // Offline payments
//     Route::get('/offline-payment', [App\Http\Controllers\Buyer\OfflinePaymentController::class, 'create'])->name('offline.create');
//     Route::post('/offline-payment', [App\Http\Controllers\Buyer\OfflinePaymentController::class, 'store'])->name('offline.store');
// });

Route::get('/dashboard', [BuyerDashboardController::class, 'index'])->name('buyer.dashboard');
Route::middleware(['auth', 'role:buyer'])->group(function () {
    
});