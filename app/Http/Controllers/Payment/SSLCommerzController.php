<?php
namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SSLCommerzController extends Controller
{
    public function initiate(Request $request)
    {
        // Start SSLCommerz payment
    }

    public function callback(Request $request)
    {
        // Handle payment callback
    }
}
