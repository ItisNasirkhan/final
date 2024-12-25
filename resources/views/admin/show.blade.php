@extends('home.index')

@section('content')
 
<div class="card">
  <div class="card-header">Product Page</div>
  <div class="card-body">
    
        <div class="card-body">

        <h5 class="card-title">Name : {{ $product->name }}</h5>
        <p class="card-text">Price : {{ $product->price }}</p>
        <p class="card-text">Quantity : {{ $product->quantity }}</p>
  </div>
       
    </hr>
  
  </div>

</div>
@endsection 