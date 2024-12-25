@if($products->isEmpty())
    <p>No products found.</p>
@else
    <ul class="list-group">
        @foreach($products as $product)
            <li class="list-group-item">
                <strong>{{ $product->name }}</strong> ({{ $product->price }})
            </li>
        @endforeach
    </ul>
@endif