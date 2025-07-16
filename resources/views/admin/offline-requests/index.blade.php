@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-xl font-bold mb-4">Offline Payment Requests</h2>

    <table class="w-full border">
        <thead>
            <tr>
                <th>User</th>
                <th>Bank</th>
                <th>Transaction ID</th>
                <th>Amount</th>
                <th>Attachment</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $payment)
                <tr class="border-t">
                    <td>{{ $payment->user->name }}</td>
                    <td>{{ $payment->bank_name }}</td>
                    <td>{{ $payment->transaction_id }}</td>
                    <td>{{ $payment->amount }}</td>
                    <td>
                        @if ($payment->attachment)
                            <a href="{{ asset('storage/' . $payment->attachment) }}" target="_blank">View</a>
                        @endif
                    </td>
                    <td class="capitalize">{{ $payment->status }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.offline.status', $payment->id) }}">
                            @csrf
                            <select name="status" onchange="this.form.submit()" class="form-select">
                                <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="approved" {{ $payment->status == 'approved' ? 'selected' : '' }}>Approve</option>
                                <option value="rejected" {{ $payment->status == 'rejected' ? 'selected' : '' }}>Reject</option>
                            </select>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $requests->links() }}
</div>
@endsection
