@extends ('main.main')

@section('content')

<div class="container text-center py-5" style="background: linear-gradient(180deg, #fff7e6, #f3e5d0);">
    <div class="row justify-content-center">
        <div class="col-lg-3 mb-4">
            <i class="bi bi-geo-alt-fill" style="font-size: 2.5rem; color: #F3CA52;"></i>
            <h1 class="fw-bold mt-3" style="font-size: 2rem; color: #5e4037;">Temukan Outlet Kami</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="row border rounded-3 p-4 shadow" style="background-color: #fff;">
                <!-- Kolom 1 -->
                <div class="col-md-4 border-end text-center">
                    <img src="{{ asset('images/mlg.png') }}" class="img-fluid rounded-circle mb-3" alt="Bali & Lombok">
                    <h5>Malang</h5>
                    <p class="text-muted">Nikmati layanan terbaik kami di lokasi wisata populer.</p>
                </div>
                <!-- Kolom 2 -->
                <div class="col-md-4 border-end text-center">
                    <img src="{{ asset('images/pdn.png') }}" class="img-fluid rounded-circle mb-3" alt="Jakarta">
                    <h5>Pandaan</h5>
                    <p class="text-muted">Pusat kota dan akses cepat di berbagai wilayah daerah sekitarnya.</p>
                </div>
                <!-- Kolom 3 -->
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/sby.png') }}" class="img-fluid rounded-circle mb-3" alt="Sumatera">
                    <h5>Surabaya</h5>
                    <p class="text-muted">Cabang kami tersebar di kota besar untuk kenyamanan Anda.</p>
                </div>
            </div>
            <!-- CTA Section -->
            <div class="text-center mt-4">
                <button class="btn btn-warning text-white px-4 py-2" style="border-radius: 20px;">
                    Lihat Semua Lokasi
                </button>
            </div>
        </div>
    </div>
</div>


@endsection