@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Welcome to the Software Marketplace</h1>
<p>Discover, buy, and sell digital software products easily.</p>

<a href="{{ route('product.search') }}" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded">
    Browse Products
</a>
@endsection
