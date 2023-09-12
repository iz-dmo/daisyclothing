<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaisyClothing</title>
    <!-- custom css link -->
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

</head>
<body>
<!-- start nav bar -->
<div class=" bg_nav">
  <div class="container">
    <div class="d-flex justify-content-between">
      <div class="py-2 d-none d-lg-block">
        <i class="fa-solid fa-phone fa-lg text-dark me-1"></i> 
        <span class="text-dark">+959-402670002</span>
        <!-- <i class="fa-solid fa-location-dot fa-lg text-dark me-1 ms-3"></i> -->
      </div>
      <div class="py-2">
        <span class="text-dark ms-3">Super Values Deals- Save more with Coupons</span>
      </div>
      <div class="py-2 d-none d-lg-block">
        <i class="fa-solid fa-location-dot fa-lg"></i>
        <span class="text-dark">Mandalay</span>
      </div>

    </div>
  </div>
</div>
  <nav class="navbar navbar-expand-xl navbar-dark">
    <div class="container">
      <img src="{{asset('images/daisy_logo.png')}}" alt="" class="img-fluid navbar-brand logo me-3">
      <button class="navbar-toggler" type="button"
        data-bs-toggle="offcanvas" 
        data-bs-target="#navbarOffcanvas"
        aria-controls="navbarOffcanvas"
        aria-expanded="false" aria-label="Toggle navigation">
        <a  class="btn bg_nav position-relative cart me-4 ms-sm-3" href="{{route('cart')}}" >
                <i class="fa-solid fa-cart-shopping linkk fa-lg"></i>
                <span class="position-absolute top-0 translate-middle badge rounded-pill bg-warning number itemCount">0</span>
        </a>
        <span class="navbar-toggler-icon bg_toggle ms-4"></span>
      </button>
      <div class="offcanvas offcanvas-end bg_nav" id="navbarOffcanvas"
          tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img src="{{asset('images/daisy_logo.png')}}" alt="" class="img-fluid navbar-brand logo">
            <button type="button" class="btn-close btn-close-success text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">          
            <div class="navbar-nav">
              <div class="d-lg-none d-md-block">
                <span><i class="fa-solid fa-magnifying-glass linkk fa-lg me-2"></i><input type="text" class="inputing1 pt-1 pb-1 ps-2" placeholder="Search for Items"></span>
              </div>
              <a class="nav-item nav-link active linkk mx-sm-4" aria-current="page" href="{{route('item.index')}}">Home</a>
              <a class="nav-item nav-link linkk mx-sm-4" href="{{route('shop')}}">Shop</a>
              <a class="nav-item nav-link linkk  mx-sm-4 me-sm-4" href="">About</a>
              <a class="nav-item nav-link linkk hidden me-sm-4" href="">Contact</a>
              <a href="" class="nav-link linkk blog ms-sm-5 d-none d-lg-block btn"><i class="fa-solid fa-magnifying-glass fa-lg ms-sm-5"></i></a>
              <input type="text" class="inputing d-none d-lg-block ms-1" placeholder="Search for Items">
            <div>
              <a  class="btn bg_nav position-relative cart me-4 ms-sm-3" href="{{route('cart')}}" >
                <i class="fa-solid fa-cart-shopping linkk fa-lg"></i>
                <span class="position-absolute top-0 translate-middle badge rounded-pill bg-warning number itemCount">0</span>
              </a>
            </div>
            <a href="" class="btn signup ms-md-4">Sign Up</a>
        </div>
      </div>
    </div>  
  </div>
</nav>    
  <!-- end navbar -->
    @yield('content')

<!-- footer -->
<!-- footer -->
<footer class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 pt-3">
          <img src="{{asset('images/daisy_logo.png')}}" alt="" class="img-fluid w-50 mt-0">
          <p class="my-2 text-secondary">Contact</p>
          <p class="footer m-0">Address: <span class="text-secondary ms-1">Mandalay</span></p>
          <p class="footer m-0">Phone: <span class="text-secondary ms-2"> +959402670002</span></p>
          <p class="footer m-0">Email: <span class="text-secondary ms-2">daisyclothing@gmail.com</span></p>
          <div class="mt-3">
            <h6 class="footer">Follow Me</h6>
            <a href="https://www.facebook.com/thugdmo613331" class="text-secondary"><i class="fa-brands fa-facebook fa-lg"></i></a>
            <a href="https://github.com/iz-dmo" class="text-secondary mx-2"><i class="fa-brands fa-github fa-lg"></i></a>
            <a href="https://www.instagram.com/iz_dmo7/" class="text-secondary"><i class="fa-brands fa-square-instagram fa-lg"></i></a>
            <a href="https://discord.com/channels/@Iz_Dmo" class="text-secondary mx-2"><i class="fa-brands fa-discord fa-lg"></i></a>
          </div>
        </div>
        <!-- Account -->

        <div class="col-12 col-md-2 pt-3">
          <h5 class="mb-md-3 me-md-">Address</h5>
          <p class="footerr mb-0 mt-md-4 me-md- text-secondary">About Us</p>
          <p class="footerr mb-0 mt-2 me-md- text-secondary">Delivery Information</p>
          <p class="footerr mb-0 mt-2 me-md- text-secondary">Privacy Policy</p>
          <p class="footerr mb-0 mt-2 me-md- text-secondary">Terms & Conditions</p>
          <p class="footerr mb-0 mt-2 me-md- text-secondary">Contact Us</p>
          <p class="footerr mb-0 mt-2 me-md-">Support Center</p>
        </div>

        <!-- My account -->

        <div class="col-12 col-md-2 pt-3">
          <h5 class="mb-md-3 ms-md-4">My Account</h5>
          <p class="mb-0 mt-md-4 ms-md-4 text-secondary">Sign In</p>
          <p class="mb-0 mt-2 ms-md-4 text-secondary">View Cart</p>
          <p class="mb-0 mt-2 ms-md-4 text-secondary">My Wishlist</p>
          <p class="mb-0 mt-2 ms-md-4 text-secondary">Track My Order</p>
          <p class="mb-0 mt-2 ms-md-4 text-secondary">Help</p>
          <p class="mb-0 mt-2 ms-md-4 text-secondary">Order</p>
        </div>

        <!-- payment -->
        <div class="col-12 col-md-4 pt-3">
          <h5 class="mb-md-3 ms-md-5">Secured Payment Gateways</h5>
          <img src="{{asset('images/payment-method.png')}}" alt="" class="img-fluid w-50 ms-md-5 mt-md-1">

        </div>

        <div class="col-12 mt-4 align-items-center">
          <hr class="m-0">
          <p class="text-left m-0 py-2 text-secondary">&copy; 2023 DaisyClothing.All rights reserved
            <span class="float-md-end m-0 p-0 text-secondary">Designed By Dmo</span>
          </p>
        </div>
        
      </div>
    </div>
  </footer>


<!-- jquery link -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="{{asset('front/slider.js')}}"></script>
<script src="{{asset('front/count.js')}}"></script>
@yield('script')
<!-- bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- fontawesome link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- custom js link -->
<script src="{{asset('front/cus.js')}}"></script>


</body>
</html>

