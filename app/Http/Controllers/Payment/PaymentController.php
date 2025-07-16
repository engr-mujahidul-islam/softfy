<?php
use App\Models\Order;
use App\Services\LicenseKeyService;

class PaymentController
{
    public function handlePaymentSuccess($orderId)
    {
        $order = Order::with('items.product')->findOrFail($orderId);
        $order->status = 'completed';
        $order->save();

        LicenseKeyService::generateAndAssign($order);

        // You can also notify the user or redirect to dashboard
        return redirect()->route('buyer.dashboard')->with('success', 'Payment successful. License key has been generated.');
    }
}
