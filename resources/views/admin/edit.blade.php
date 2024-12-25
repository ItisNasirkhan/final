@extends('home.index')

@section('content')
<div class="container">
    <h2>Edit Product</h2>
    <form action="{{ route('admin.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price" step="0.01" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $product->quantity }}" required>
        </div>
        <div class="mb-3">
            <label for="categorie_id" class="form-label">Category</label>
            <input type="number" class="form-control" name="categorie_id" id="categorie_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
