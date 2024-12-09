@extends ('main.main')

@section('content')

<div class="home"> <!-- Wrapper untuk background -->
    <div class="container bg-white">
        <div class="row align-items-center">
            <!-- Left Side (Hero Content) -->
            <div class="col-lg-6">
                <h1 class="hero-title">PREPARE YOUR MUFFIN'S<br>IN 15 MINUTES</h1>
                <p class="hero-subtitle">" Cake to celebrate ur sweet life "</p>
        <div class="d-flex">
        <a href="/store" class="btn btn-custom btn-outline-primary me-2">Our Store List</a>
        <a href="/menu" class="btn btn-custom btn-outline-warning">Our Pricelist</a>
        </div>

        
                <p>Let’s stay in touch!</p>
                <div class="d-flex">
                    <input type="email" class="form-control email-input" placeholder="Enter your e-mail">
                    <button class="btn btn-secondary ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 1.538a2 2 0 0 0-2.217-1.21L1.58 3.087a1.5 1.5 0 0 0-.042 2.851L6.21 8.011l1.772 5.1c.284.807 1.348.814 1.649.01l2.604-7.26 3.865-2.141a2 2 0 0 0-.1-3.082L16 1.539z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Right Side (Images) -->
            <div class="col-lg-6">
    <div class="image-container">
        <img src="{{ asset('images/16.jpeg') }}" alt="Muffin 1">
        <img src="{{ asset('images/9.jpeg') }}" alt="Muffin 2">
        <img src="{{ asset('images/17.jpeg') }}" alt="Muffin 3">
        <img src="{{ asset('images/10.jpeg') }}" alt="Muffin 4">
    </div>
</div>
        </div>
    </div>
</div>

<!-- Fav Section -->
<h2 class="text-center fw-bold mb-4 mt-5" style="color: #5a4a42; font-family: 'Aclonica', sans-serif; ">Best Sellers</h2> 
        <section class="team__container" id="team">

            <!-- produk ke 1 -->
                <div class="team animate-up">
                    <div class="imgBx">
                        <img src="{{ asset('images/variant/keju.png') }}" alt="Best Seller 1">
                        <span class="sale-badge">FAV!</span>
                        <div class="cart-icon-container">
                            <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="contentBx">
                            <h3>Cheese Muffin<div class="product-price">
                                <span style="color: #802222;" class="fw-bold">Rp8000</span>
                            </div></h3>
                            <a href="/home" class="product-button">
                                <i class="bi bi-cart-plus me-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>

                 <!-- produk ke 2 -->
                 <div class="team animate-up">
                    <div class="imgBx">
                        <img src="{{ asset('images/variant/trms.jpeg') }}" alt="Best Seller 1">
                        <span class="sale-badge">FAV!</span>
                        <div class="cart-icon-container">
                            <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="contentBx">
                            <h3>Tiramissu Muffin <div class="product-price">
                                <span style="color: #802222;" class="fw-bold">Rp7000</span>
                            </div></h3>
                            <a href="/home" class="product-button">
                                <i class="bi bi-cart-plus me-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>

                 <!-- produk ke 3 -->
                 <div class="team animate-up">
                    <div class="imgBx">
                        <img src="{{ asset('images/variant/cklt.png') }}" alt="Best Seller 1">
                        <span class="sale-badge">FAV!</span>
                        <div class="cart-icon-container">
                            <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="contentBx">
                            <h3>Chocolate Muffin <div class="product-price">
                                <span style="color: #802222;" class="fw-bold">Rp7000</span>
                            </div></h3>
                            <a href="/home" class="product-button">
                                <i class="bi bi-cart-plus me-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>



@endsection
