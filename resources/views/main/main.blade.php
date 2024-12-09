<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
      

</head>

<body id="home">
<!--Start Nav -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="padding-top: 0; padding-left: 10px;">
        <a class="navbar-brand" href="/">
            MUFFIN FUN'S
            <small>Cakes, Bread & More...</small>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/menu">Menu's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/store">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
            <button class="btn btn-light-custom">
            <i class="bi bi-cart"></i> CART
            </button>  
                <button class="btn btn-custom ">LOGIN/SIGN UP</button>
            </div>
        </div>
</nav>

    <!--End Nav -->

    @yield('content')
    <!--Start Footer -->
    
    <footer class="text-black pt-5" style="box-shadow: 0px -4px 6px rgba(0, 0, 0, 0.1);">
    @yield('footer')
        <div class="footer row">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="fw-bold text-uppercase">Muffin Fun's</h5>
                <p>
                    Experience the joy of baking with Muffin Fun's! Freshly baked muffins made just for you. Celebrate your sweet moments with us.
                </p>
                <p class="small mb-0">&copy; 2024 Muffin Fun's. All rights reserved.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="fw-bold text-uppercase">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/home" class="text-black text-decoration-none hover-effect">Home</a></li>
                    <li><a href="/menu" class="text-black text-decoration-none hover-effect">Menu</a></li>
                    <li><a href="/store" class="text-black text-decoration-none hover-effect">Our Store List</a></li>
                    <li><a href="/contact" class="text-black text-decoration-none hover-effect">Contact Us</a></li>
                </ul>
            </div>

            <!-- Social & Newsletter -->
            <div class="col-lg-4 col-md-12">
                <h5 class="fw-bold text-uppercase">Stay Connected</h5>
                <p>Join our newsletter and stay updated with exclusive offers and news!</p>
                <form class="d-flex mb-3">
                    <input type="email" class="form-control me-2" placeholder="Enter your e-mail">
                    <button class="btn btn-warning btn-hover" type="submit">
                        <i class="bi bi-send"></i>
                    </button>
                </form>
                <div class="d-flex gap-3">
                    <a href="#" class="text-black social-icon hover-effect">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="text-black social-icon hover-effect">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="text-black social-icon hover-effect">
                        <i class="bi bi-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
</footer>
    <!--End Footer -->

    <!--Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script>
    // Inisialisasi Swiper
    const swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>

</html>