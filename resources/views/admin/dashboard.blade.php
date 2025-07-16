@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold">Admin Dashboard</h1>

<div class="mt-4">
    <p>Total Users: {{ $stats['users'] }}</p>
    <p>Pending Products: {{ $stats['pending_products'] }}</p>
    <p>Offline Payments: {{ $stats['offline_payments'] }}</p>
</div>

<a href="{{ route('admin.products.pending') }}" class="mt-4 inline-block bg-orange-500 text-white px-4 py-2 rounded">
    Review Pending Products
</a>
@endsection
