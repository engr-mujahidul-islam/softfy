@extends('layouts.app')

@section('content')
<div class="container max-w-lg mx-auto">
    <h2 class="text-xl font-bold mb-4">Offline Bank Payment</h2>
    <form action="{{ route('offline.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <input type="text" name="bank_name" class="form-input w-full" placeholder="Bank Name" required>
        <input type="text" name="transaction_id" class="form-input w-full" placeholder="Transaction ID" required>
        <input type="number" name="amount" class="form-input w-full" placeholder="Amount (BDT)" required step="0.01">
        <textarea name="note" class="form-textarea w-full" placeholder="Note (optional)"></textarea>
        <input type="file" name="attachment" class="form-input">
        <button type="submit" class="btn btn-primary">Submit Payment</button>
    </form>
</div>
@endsection
