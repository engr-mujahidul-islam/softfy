@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold">{{ $product->name }}</h1>
<p class="text-gray-700 mt-2">{{ $product->description }}</p>

<h2 class="text-xl mt-6 font-semibold">Versions</h2>
<ul class="list-disc pl-5 mt-2">
    @foreach($product->versions as $version)
        <li>
            <strong>{{ $version->version_number }}</strong> - {{ $version->changelog }} <br>
            <span class="text-sm text-gray-500">{{ $version->created_at->format('Y-m-d') }}</span>
        </li>
    @endforeach
</ul>

<a href="#" class="mt-6 inline-block bg-green-600 text-white px-4 py-2 rounded">
    Buy Now - ${{ $product->price }}
</a>
@endsection
