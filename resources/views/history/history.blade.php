@extends('layouts.app')

@section('title', 'History of Operations')

@section('content')
    <h1>History of Operations</h1>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Date</th>
            <th>Amount</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($operations as $operation)
            <tr>
                <td>{{ $operation->operation_date }}</td>
                <td>{{ $operation->amount }}</td>
                <td>{{ $operation->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $operations->links() }}


@endsection
