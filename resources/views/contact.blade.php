@extends ('main.main')

@section('content')

<section class="collaboration-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-md-6">
                    <img src="{{ asset('images/lp.png') }}" alt="Collaboration Image" class="img-fluid rounded">
                </div>
                <!-- Text Section -->
                <div class="col-md-6 collaboration-text">
                    <h2>Catch us at your fingertips<br>through the button below<br>and let’s collaborate!</h2>
                    <div class="d-flex mt-4">
                        <a href="https://wa.me/628118600656" class="contact-button me-3">
                            <i class="bi bi-whatsapp"></i> WHATSAPP <br> +62 851 8640 676
                        </a>
                        <a href="mailto:b2b@harvestcakes.com" class="contact-button">
                            <i class="bi bi-envelope"></i> EMAIL <br> muffinfuns@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hubungi Kami -->
        <div class="hubungi-kami-section">
  <h2 class="hubungi-kami-title">HUBUNGI KAMI</h2>
  <div class="yellow-line mx-auto my-3"></div>
  <p class="hubungi-kami-desc">Punya pertanyaan atau hal yang ingin ditanyakan kepada kami? Mohon luangkan waktu untuk memberi tahu kami apa yang Anda pikirkan! Kami akan mencoba menghubungi Anda kembali selama jam kerja.</p>
  <form class="hubungi-kami-form">
    <input type="text" name="nama" placeholder="Nama Anda" required>
    <input type="email" name="email" placeholder="Email Anda" required>
    <textarea name="pesan" placeholder="Pesan Anda" required></textarea>
    <button type="submit" class="submit-btn">Kirim</button>
  </form>
</div>

    </section>

@endsection