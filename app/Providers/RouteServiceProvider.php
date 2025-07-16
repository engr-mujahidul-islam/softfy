<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;

class RouteServiceProvider
{
    public function map() // ← removed ": void"
    {
        $this->mapApiRoutes();

        Route::middleware('web')->group(base_path('routes/web.php'));
        Route::middleware('web')->group(base_path('routes/admin.php'));
        Route::middleware('web')->group(base_path('routes/seller.php'));
        Route::middleware('web')->group(base_path('routes/buyer.php'));
        Route::middleware('web')->group(base_path('routes/payment.php'));
    }

    protected function mapApiRoutes()
    {
        // Define API routes here
    }
}
