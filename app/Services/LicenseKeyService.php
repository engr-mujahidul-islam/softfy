<?php 

// app/Services/LicenseKeyService.php

namespace App\Services;

use App\Models\LicenseKey;
use Illuminate\Support\Str;

class LicenseKeyService
{
    public static function generateAndAssign($order)
    {
        foreach ($order->items as $item) {
            $product = $item->product;

            $license = LicenseKey::create([
                'order_id'   => $order->id,
                'product_id' => $product->id,
                'buyer_id'   => $order->user_id,
                'key'        => strtoupper(Str::uuid()),
            ]);
        }
    }

}
