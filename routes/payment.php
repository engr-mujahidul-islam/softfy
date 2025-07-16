<?php
use Illuminate\Support\Facades\Route;

// Payment routes

Route::post('/payment/sslcommerz/initiate', [App\Http\Controllers\Payment\SSLCommerzController::class, 'initiate'])->name('payment.sslcommerz.initiate');
Route::post('/payment/bkash/initiate', [App\Http\Controllers\Payment\BkashController::class, 'initiate'])->name('payment.bkash.initiate');

// Callbacks
Route::post('/payment/sslcommerz/callback', [App\Http\Controllers\Payment\SSLCommerzController::class, 'callback'])->name('payment.sslcommerz.callback');
Route::post('/payment/bkash/callback', [App\Http\Controllers\Payment\BkashController::class, 'callback'])->name('payment.bkash.callback');

// Offline payment form is handled in buyer.php


use App\Http\Controllers\Payment\OfflinePaymentController;

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/offline-payment', [OfflinePaymentController::class, 'showForm'])->name('offline.form');
    Route::post('/offline-payment', [OfflinePaymentController::class, 'submit'])->name('offline.submit');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/offline-requests', [OfflinePaymentController::class, 'index'])->name('admin.offline.index');
    Route::post('/offline-requests/{payment}/status', [OfflinePaymentController::class, 'updateStatus'])->name('admin.offline.status');
});
