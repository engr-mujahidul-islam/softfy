<?php 

// app/Http/Controllers/Payment/OfflinePaymentController.php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\OfflinePaymentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfflinePaymentController extends Controller
{
    public function showForm()
    {
        return view('buyer.offline-payment');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'bank_name' => 'required|string',
            'transaction_id' => 'required|string|unique:offline_payment_requests',
            'amount' => 'required|numeric|min:0.01',
            'note' => 'nullable|string',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $filePath = $request->file('attachment')?->store('attachments/offline_payments', 'public');

        OfflinePaymentRequest::create([
            'user_id' => auth()->id(),
            'bank_name' => $request->bank_name,
            'transaction_id' => $request->transaction_id,
            'amount' => $request->amount,
            'note' => $request->note,
            'attachment' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Offline payment request submitted successfully.');
    }

    public function index()
    {
        $requests = OfflinePaymentRequest::with('user')->latest()->paginate(20);
        return view('admin.offline-requests.index', compact('requests'));
    }

    public function updateStatus(Request $request, OfflinePaymentRequest $payment)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        $payment->status = $request->status;
        $payment->save();

        // Optionally trigger order fulfillment or license creation

        return back()->with('success', "Payment marked as {$payment->status}.");
    }
}
