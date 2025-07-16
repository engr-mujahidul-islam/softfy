<?php
namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BkashController extends Controller
{
    public function initiate(Request $request)
    {
        // Start bKash payment
    }

    public function callback(Request $request)
    {
        // Handle bKash callback
    }
}
