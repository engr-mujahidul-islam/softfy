<?php 

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with('versions')->firstOrFail();
        return view('products.show', compact('product'));
    }

    public function search()
    {
        // Implement product search
    }
}
