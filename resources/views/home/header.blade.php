<section id="header">
            <nav><img src="../home/images/Untitled-3-01.png" class="logo" alt="">
                          </nav>
        
            <div id="header-2">
                 
                    <a href="index"><h1 class="active">Home</h1></a>
                    <a href="shop"><h1>Shop</h1></a>
                    <!-- <a href="blog"><h1>Blog</h1></a>
                    <a href="about"><h1>About</h1></a> -->
                    <a href="contact"><h1>Contact</h1></a>
                    <a href="{{ route('login') }}"><h1>Login</h1></a>
                    <a href="{{ route('register') }}"><h1>Register</h1></a>
                    <a href="cart.html" id="lg-bag"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>  
                    <div class="search-container" style="position: relative;">
    <input type="text" id="search-bar" class="form-control" placeholder="Search for Product..." autocomplete="off">
    <ul id="search-results" class="dropdown-menu" style="display: none; position: absolute; top: 100%; left: 0; z-index: 1000; width: 100%;">
        <!-- AJAX results will be displayed here -->
    </ul>
</div>

                    <i class="fa-solid fa-magnifying-glass"></i>
                    <a href="#" id="close"><button type="button" class="btn-close" aria-label="Close"></button></a>
            </div>
            <div id="mobile">
              
              <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
               </a> 
              <i id="bar" class="fas fa-outdent"></i>
            </div>
          </section>