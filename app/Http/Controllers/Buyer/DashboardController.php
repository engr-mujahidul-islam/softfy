<?php
namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Buyer dashboard stats
    }

    public function dashboard()
    {
        return redirect()->route('correct.route.name')->with('success', 'Payment successful. License key has been generated.');
    }
}
