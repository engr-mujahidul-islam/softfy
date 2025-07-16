<?php
namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // List seller's products
    }

    public function create()
    {
        // Return product create form
    }

    public function store(Request $request)
    {
        // Store new product
    }

    public function edit($id)
    {
        // Return edit form
    }

    public function update(Request $request, $id)
    {
        // Update product
    }

    public function destroy($id)
    {
        // Delete product
    }
}
