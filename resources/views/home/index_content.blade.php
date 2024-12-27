@extends('home.index')

@section('content')

<section id="hero">
    <h4>Trade-in-offer </h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off!</p>
    <button type="button" class="btn btn-outline-primary">Shop Now</button>
</section>

<section id="features">
    <div id="fe-box1">
        <img src="../home/images/features/f1.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div id="fe-box2">
        <img src="../home/images/features/f2.png" alt="">
        <h6>Online Order</h6>
    </div>
    <div id="fe-box3">
        <img src="../home/images/features/f3.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div id="fe-box5">
        <img src="../home/images/features/f4.png" alt="">
        <h6>Promotion</h6>
    </div>
    <div id="fe-box4">
        <img src="../home/images/features/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div id="fe-box6">
        <img src="../home/images/features/f6.png" alt="">
        <h6>24/7 Support</h6>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        @foreach($products as $product)
            <div class="pro" onclick="window.location.href='{{ route('admin.show', $product->id) }}'">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                <div class="des">
                    <p>{{ $product->category->name ?? 'Uncategorized' }}</p>
                    <h5>{{ $product->name }}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>${{ $product->price }}</h4>
                    <div class="cart22">
                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 and get 1 free</h2>
        <span>The best classic dress is on sale at Akhi</span>
        <button>Learn more</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>The best classic dress is on sale at Akhi</span>
        <button class="thbtn">Collection</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>SEASON SALE</h2>
        <h3>Winter collection 50% off</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring/summer 2024</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New trendy prints</h3>
    </div>
</section>

@endsection
