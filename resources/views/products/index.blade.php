@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">All Software Products</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach($products as $product)
        <div class="p-4 border rounded bg-white">
            <h3 class="text-lg font-semibold">
                <a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
            </h3>
            <p>{{ $product->short_description }}</p>
            <p class="mt-2 text-sm text-gray-600">Price: ${{ $product->price }}</p>
        </div>
    @endforeach
</div>
@endsection
