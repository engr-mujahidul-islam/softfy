<?php 
namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;

class BuyerDashboardController extends Controller
{
    public function index()
    {
        return view('buyer.dashboard');
    }
}
