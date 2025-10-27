<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata - Lira Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('build/assets/app-Cn8k3xrs.css')}}" rel="stylesheet">
</head>
<body>

@include('web.components.header')

<!-- HERO -->
<section class="hero-about">
    <div class="container" data-aos="fade-up">
        <h1>Paket Wisata Terbaik Untuk Kamu</h1>
        <p>
            Kami adalah penyedia jasa wisata profesional
        </p>
    </div>

</section>


<!-- LIST PAKET -->
<section id="paket-list" class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">Paket Wisata Kami</h2>
            <p class="text-muted">Beragam pilihan paket untuk liburan seru bersama keluarga, pasangan, atau rombongan kantor.</p>
        </div>

        <div class="row g-4">
            @foreach ([
                ['img' => 'paket1.jpg', 'judul' => 'Paket 1 Hari Jogja', 'desc' => 'Candi Prambanan, Tebing Breksi, Malioboro', 'harga' => 'Rp 350.000/orang'],
                ['img' => 'paket2.jpg', 'judul' => 'Paket 2 Hari 1 Malam', 'desc' => 'HeHa Sky View, Pantai Parangtritis, Hutan Pinus', 'harga' => 'Rp 650.000/orang'],
                ['img' => 'paket3.jpg', 'judul' => 'Paket 3 Hari 2 Malam', 'desc' => 'Wisata budaya, kuliner, dan alam Jogja lengkap', 'harga' => 'Rp 950.000/orang'],
                ['img' => 'paket4.jpg', 'judul' => 'Paket Honeymoon Jogja', 'desc' => 'Pengalaman romantis di destinasi eksklusif', 'harga' => 'Rp 1.250.000/pasangan']
            ] as $p)
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 hover-card">
                    <div class="position-relative">
                        <img src="{{ asset('assets/web/img/about.jpg') }}" class="card-img-top" alt="{{ $p['judul'] }}">
                        <div class="overlay d-flex justify-content-center align-items-center">
                            <a href="" class="btn btn-light text-primary fw-semibold rounded-pill px-3">Lihat Detail</a>
                        </div>
                    </div>
                    <div class="card-body text-center p-4">
                        <h5 class="fw-bold text-primary">{{ $p['judul'] }}</h5>
                        <p class="text-muted small mb-2">{{ $p['desc'] }}</p>
                        <p class="fw-semibold text-dark mb-3">{{ $p['harga'] }}</p>
                        <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20booking%20{{ urlencode($p['judul']) }}."
                           target="_blank" class="btn btn-primary rounded-pill w-100">
                            <i class="bi bi-whatsapp me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('web.components.banner')
@include('web.components.whatsapp')
@include('web.components.footer')

<script src="{{asset('build/assets/app-gY57bFlj.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
</script>

<style>
.hover-card {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.hover-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
}
.overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
    opacity: 0;
    transition: opacity 0.4s ease;
}
.hover-card:hover .overlay {
    opacity: 1;
}
</style>

</body>
</html>
