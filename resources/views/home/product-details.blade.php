@extends('home.index')

@section('content')
<section id="prodetail" class="section-p1">
        <div class="single-pro-image">
            <img src="../home/images/products/f1.jpg" alt="" width="100%" id="mainimg">
            <div class="small-img-group">
                <div class="small-image-column">
                    <img src="../home/images/products/f1.jpg" class="small-img" alt="" width="100%">
                </div>
                <div class="small-image-column">
                    <img src="../home/images/products/f2.jpg" class="small-img" alt="" width="100%">
                </div>
                <div class="small-image-column">
                    <img src="../home/images/products/f3.jpg" class="small-img" alt="" width="100%">
                </div>
                <div class="small-image-column">
                    <img src="../home/images/products/f4.jpg" class="small-img" alt="" width="100%">
                </div>
            </div>

        </div>
        <div class="single-pro-details">
            <h6>Home / T-shirt</h6>
            <h4>Men's Fashion T-shirt</h4>
            <h2>$139.00</h2>
            <select name="select size" id="">
              <option value="">select the size</option>
              <option value="">sm</option>
              <option value="">l</option>
              <option value="">xl</option>
              <option value="">xxl</option>
            </select>
            <input type="number" value="1">
            <button>Add to cart</button>
            <h4>Product detail</h4>
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab blanditiis quos a, velit porro minima dolorem aut, delectus reiciendis, distinctio alias doloremque nam voluptate esse molestiae! Modi accusamus nihil tempora soluta dolore quasi omnis at sunt earum. Iure, excepturi voluptate.</span>
        </div>
    </section>
    <section id="product1" class="section-p1">
      <h2>Feature product</h2>
      <p>Summer Collection New Modern Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="../home/images/products/n1.jpg" alt="">
          <div class="des">
                <p>adidas</p>
                <h5>Cartoon Austranaut T-Shirt</h5>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
                <div class="cart22">
                  <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                  </div>
          </div>
         
        </div>
        <div class="pro">
          <img src="../home/images/products/n2.jpg" alt="">
          <div class="des">
                <p>adidas</p>
                <h5>Cartoon Austranaut T-Shirt</h5>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
                <div class="cart22">
                  <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
          </div>
         
        </div>
        <div class="pro">
          <img src="../home/images/products/n3.jpg" alt="">
          <div class="des">
                <p>adidas</p>
                <h5>Cartoon Austranaut T-Shirt</h5>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
                <div class="cart22">
                  <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
          </div>
         
        </div>
        <div class="pro">
          <img src="../home/images/products/f4.jpg" alt="">
          <div class="des">
                <p>adidas</p>
                <h5>Cartoon Austranaut T-Shirt</h5>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
                <div class="cart22">
                  <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
          </div>
         
        </div>
        
        
        
       
      
      </div>
    </section>
    @endsection