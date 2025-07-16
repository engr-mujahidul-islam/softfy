@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold">Seller Dashboard</h1>

<p class="mt-2">Welcome, {{ auth()->user()->name }}</p>

<h2 class="text-xl mt-6 font-bold">Your Products</h2>
<ul class="list-disc pl-5 mt-2">
    @foreach($products as $product)
        <li>
            <a href="#">{{ $product->name }}</a> - {{ $product->status }}
        </li>
    @endforeach
</ul>

<a href="{{ route('seller.products.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
    Add New Product
</a>
@endsection
