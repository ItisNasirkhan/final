@extends('home.index')

@section('content')
<div class="container">
    <h1>{{ isset($data) ? 'Edit Order' : 'Create Order' }}</h1>
    <form action="{{ isset($data) ? route('order.update') : route('order.store') }}" method="POST">
        @csrf
        @if (isset($data))
            <input type="hidden" name="id" value="{{ $data->id }}">
        @endif

        <div class="mb-3">
            <label for="customer_name" class="form-label">Customer Name</label>
            <input type="text" id="customer_name" name="customer_name" class="form-control" 
                   value="{{ $data->customer_name ?? old('customer_name') }}" required>
        </div>

        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount</label>
            <input type="number" id="total_amount" name="total_amount" class="form-control" 
                   value="{{ $data->total_amount ?? old('total_amount') }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="pending" {{ (isset($data) && $data->status === 'pending') ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ (isset($data) && $data->status === 'completed') ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ (isset($data) && $data->status === 'cancelled') ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($data) ? 'Update' : 'Create' }}</button>
        <a href="{{ route('order.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
