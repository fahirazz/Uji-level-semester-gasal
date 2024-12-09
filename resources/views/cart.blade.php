@extends ('main.main')

@section('content')

 <div class="container mt-5">
        <!-- Step Navigation -->
        <div class="step-navigation d-flex justify-content-between mb-4">
            <div class="step active">1. Cart</div>
            <div class="step">2. Order Info</div>
            <div class="step">3. Payment</div>
        </div>

        <div class="row">
            <!-- Left Section (Cart Items) -->
            <div class="col-lg-8">
                <h5 class="text-uppercase mb-4">Items</h5>
                <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                    <div>
                        <h6>Golden Chocolate Cake</h6>
                        <small class="text-muted">Size: Golden Chocolate Cake</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-secondary btn-sm me-2">-</button>
                        <span>1</span>
                        <button class="btn btn-outline-secondary btn-sm ms-2">+</button>
                    </div>
                    <div class="text-end">
                        <span>Rp 490.000</span>
                        <button class="btn btn-link text-danger p-0 ms-3">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
                <a href="#" class="btn btn-link text-decoration-none mt-3">Continue Shopping ></a>
            </div>

            <!-- Right Section (Order Summary) -->
            <div class="col-lg-4">
                <div class="card shadow-sm p-4">
                    <h6 class="fw-bold">Order Subtotal</h6>
                    <p class="fs-5 fw-bold">Rp 490.000</p>
                    <label for="order-note" class="form-label small text-muted">Add Order Note (Optional)</label>
                    <textarea id="order-note" class="form-control mb-3" placeholder="e.g. separate garnish, less ice"></textarea>
                    <div class="d-flex justify-content-between mb-3">
                        <button class="btn btn-delivery w-50 me-2">Delivery</button>
                        <button class="btn btn-pickup w-50 ms-2">Pick Up</button>
                    </div>
                    <button class="btn btn-primary w-100">Continue</button>
                </div>
            </div>
        </div>
    </div>

@endsection