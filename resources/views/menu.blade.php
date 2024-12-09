@extends ('main.main')

@section('content')

<!-- Bagian Variant -->
<section class="menu-section d-flex flex-column justify-content-center align-items-center text-center">
    <h1 class="menu-title">MENU</h1>
    <div class="yellow-line"></div>
    <h2 class="menu-step">STEP ONE: CHOOSE YOUR MUFFIN VARIANT</h2>
    <div class="yellow-line"></div>
</section>
<section class="team__container" id="team">
    @foreach ($variants as $variant)
    <div class="team">
        <div class="imgBx">
            <img src="{{ asset('storage/images/variant/' . $variant->image) }}" alt="{{ $variant->name }}">
        </div>
        <div class="team__content">
            <div class="contentBx">
                <h3>{{ $variant->name }} <br>Rp {{ number_format($variant->price, 0, ',', '.') }}</h3>
                <form action="{{ route('cart.add', $variant->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn product-button">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</section>

<!-- Bagian Topping -->
<section class="step-section text-center py-5">
    <h2 class="step-title">STEP TWO: CHOOSE YOUR FILLING</h2>
    <div class="yellow-line mx-auto my-3"></div>
</section>
<section class="team__container" id="team">
    @foreach ($toppings as $topping)
    <div class="team">
        <div class="imgBx">
            <img src="{{ asset('storage/images/topping/' . $topping->image) }}" alt="{{ $topping->name }}">
        </div>
        <div class="team__content">
            <div class="contentBx">
                <h3>{{ $topping->name }} <br>Rp {{ number_format($topping->price, 0, ',', '.') }}</h3>
                <form action="{{ route('cart.add', $topping->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn product-button">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</section>

<!-- Bagian Beverages -->
<section class="step-section text-center py-5">
    <h2 class="step-title">Beverages</h2>
    <div class="yellow-line mx-auto my-3"></div>
</section>
<section class="team__container" id="team">
    @foreach ($beverages as $beverage)
    <div class="team">
        <div class="imgBx">
            <img src="{{ asset('storage/images/beverage/' . $beverage->image) }}" alt="{{ $beverage->name }}">
        </div>
        <div class="team__content">
            <div class="contentBx">
                <h3>{{ $beverage->name }} <br>Rp {{ number_format($beverage->price, 0, ',', '.') }}</h3>
                <form action="{{ route('cart.add', $topping->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn product-button">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</section>

@endsection