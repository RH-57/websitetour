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


{{-- Paket Wisata Section --}}
    <section id="paket-wisata" class="py-5 paket-section bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Paket Wisata Populer</h2>
                <p class="text-muted">Rangkaian Perjalanan yang Diciptakan untuk Kenangan Terindahmu
Jelajahi pilihan paket terbaik Lira Tour, dirancang untuk membawamu ke momen-momen menakjubkan.</p>
            </div>

            <div class="row g-4">
                {{-- Paket 1 --}}
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 hover-card">
                        <img src="{{ asset('assets/web/img/about.jpg') }}" class="card-img-top" alt="Paket Wisata 1">
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold mb-2 text-primary">Paket Wisata 1 Hari Jogja</h5>
                            <p class="text-muted mb-3">Kunjungi destinasi populer seperti Candi Prambanan, Tebing Breksi, dan Malioboro dalam 1 hari penuh.</p>
                            <p class="fw-semibold text-dark mb-3">Mulai dari <span class="text-primary">Rp 350.000/orang</span></p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20booking%20Paket%20Wisata%201%20Hari%20Jogja."
                            target="_blank" class="btn btn-primary rounded-pill px-4">
                                <i class="bi bi-whatsapp me-2"></i>Book Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                {{-- Paket 2 --}}
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 hover-card">
                        <img src="{{ asset('assets/web/img/about.jpg') }}" class="card-img-top" alt="Paket Wisata 2">
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold mb-2 text-primary">Paket 3 Hari 2 Malam</h5>
                            <p class="text-muted mb-3">Nikmati liburan santai di Jogja dengan kunjungan ke Pantai Parangtritis, Hutan Pinus, dan wisata kuliner malam.</p>
                            <p class="fw-semibold text-dark mb-3">Mulai dari <span class="text-primary">Rp 950.000/orang</span></p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20booking%20Paket%203%20Hari%202%20Malam."
                            target="_blank" class="btn btn-primary rounded-pill px-4">
                                <i class="bi bi-whatsapp me-2"></i>Book Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                {{-- Tambahkan paket lain --}}
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 hover-card">
                        <img src="{{ asset('assets/web/img/about.jpg') }}" class="card-img-top" alt="Paket Wisata 3">
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold mb-2 text-primary">Paket Honeymoon Jogja</h5>
                            <p class="text-muted mb-3">Rasakan momen romantis bersama pasangan dengan destinasi eksklusif dan fasilitas istimewa.</p>
                            <p class="fw-semibold text-dark mb-3">Mulai dari <span class="text-primary">Rp 1.250.000/pasangan</span></p>
                            <a href="#" target="_blank" class="btn btn-primary rounded-pill px-4">
                                <i class="bi bi-whatsapp me-2"></i>Book Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                {{-- Paket 4 --}}
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 hover-card">
                        <img src="{{ asset('assets/web/img/about.jpg') }}" class="card-img-top" alt="Paket Wisata 4">
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold mb-2 text-primary">Paket 2 Hari 1 Malam</h5>
                            <p class="text-muted mb-3">Cocok untuk liburan singkat dengan kunjungan ke landmark populer dan wisata kuliner.</p>
                            <p class="fw-semibold text-dark mb-3">Mulai dari <span class="text-primary">Rp 650.000/orang</span></p>
                            <a href="#" target="_blank" class="btn btn-primary rounded-pill px-4">
                                <i class="bi bi-whatsapp me-2"></i>Book Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                {{-- Tambahkan lebih banyak card, nanti otomatis jadi baris kedua --}}
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
