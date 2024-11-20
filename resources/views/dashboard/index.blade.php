@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Your Balance</h1>
    <p>Current Balance: ${{ $balance }}</p>

    <h2>Recent Transactions</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Date</th>
            <th>Amount</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($recentTransactions as $transaction)
            <tr>
                <td>{{ $transaction->operation_date }}</td>
                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

