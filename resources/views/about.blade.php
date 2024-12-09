@extends ('main.main')

@section('content')
    <!-- About Us Section -->
    <div class="mt-4">
    <section class="about-section">
        <!-- Bagian Teks -->
        <div class="about-text">
            <div class="about-title">About Us</div>
            <h1>Muffin Fun’s is a specialist muffin cake shop</h1>
            <p>
                Produk kami diciptakan memiliki kualitas dan rasa yang tinggi. Menggunakan bahan-bahan alami premium
                dengan resep tradisional dan kontrol kualitas yang ketat, produk kami bergizi sehat dan memiliki kualitas yang konsisten.
            </p>
        </div>
        <!-- Bagian Gambar -->
        <div class="about-image">
            <img src="{{ asset('images/11.jpeg') }}" alt="Muffins" id="aboutImage">
        </div>
        </div>
    </section>

    <!-- Visi n Misi -->
    <section class="visi-misi-section">
    <h2 class="visi-misi-title">Visi dan Misi</h2>
    <div class="visi-misi-container">
        <div class="visi-box">
            <h3 class="visi-misi-header">Visi</h3>
            <p class="visi-misi-content">
               Menjadi pemimpin dalam industri muffin homemade dengan menawarkan produk berkualitas tinggi yang inovatif, sambil mendukung ekonomi lokal dari keberlanjutan lingkungan.
            </p>
        </div>
        <div class="misi-box">
            <h3 class="visi-misi-header">Misi</h3>
            <p class="visi-misi-content">
                - Menyediakan Muffin terbaik.<br>
                - Mendukung kesehatan dan kesejahteraan konsumen.<br>
                - Mendukung komunitas lokal.<br>
                - Mengutamakan kepuasan pelanggan.
            </p>
        </div>
    </div>
</section>


    @endsection