@extends('home.index')

@section('content')
<div class="container">
    <h2>Product List</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex flex-row-reverse p-2">
    <input type="text" class="form-control" id="product-search" placeholder="Search by name or price">
      </div>
      <ul id="product-results" class="list-group mt-2" style="display: none;">
         <!-- AJAX search results will appear here -->
      </ul>

    <table class="table table-striped">
       <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Category</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product['category']['name'] }}</td>
        <td>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-height: 50px;">
            @endif
        </td>
        <td>
            <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="{{ route('admin.show', $product->id) }}" class="btn btn-warning btn-sm">Show</a>
            <form action="{{ route('admin.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

    </table>
</div>

@endsection
