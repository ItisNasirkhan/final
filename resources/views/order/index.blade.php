@extends('home.index')

@section('content')
<div class="container">
    <h1>Orders</h1>
    <a href="{{ route('order.create') }}" class="btn btn-primary mb-3">Create Order</a>
    @if (session('message'))
        <div class="alert {{ session('alert-class') }}">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Customer Name</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->total_amount }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>
                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('order.destroy', $order->id) }}" class="btn btn-sm btn-danger" 
                           onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No orders found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
