<?php
namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayoutRequest;
use Illuminate\Support\Facades\Auth;

class PayoutController extends Controller
{
    public function index()
    {
        // Show list of payout requests for the authenticated seller
        $payouts = PayoutRequest::where('seller_id', Auth::id())->latest()->get();
        return view('seller.payouts.index', compact('payouts'));
    }

    public function request(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'method' => 'required|string|max:100',
            'note' => 'nullable|string|max:500',
        ]);

        PayoutRequest::create([
            'seller_id' => Auth::id(),
            'amount' => $request->amount,
            'method' => $request->method,
            'note' => $request->note,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Payout request submitted successfully.');
    }
}
