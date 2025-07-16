@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold">Buyer Dashboard</h1>

<p class="mt-2">Welcome back, {{ auth()->user()->name }}!</p>

<h2 class="text-xl mt-6 font-bold">Your Orders</h2>
<ul class="list-disc pl-5 mt-2">
    @foreach($orders as $order)
        <li>
            Order #{{ $order->id }} - {{ $order->product->name }} - {{ $order->created_at->format('Y-m-d') }}
        </li>
    @endforeach
</ul>
@endsection
