<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Mobil & Bus | Lira Tour</title>
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


{{-- Sewa Mobil & Bus Section --}}
    <section id="sewa-mobil" class="py-5 sewa-section bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Sewa Mobil & Bus</h2>
                <p class="text-muted">Nikmati perjalanan nyaman dengan armada terbaik dari Lira Tour</p>
            </div>

            <div class="row g-4">
                {{-- Mobil 1 --}}
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('assets/web/img/1.webp') }}" class="card-img-top" alt="Grand New Avanza">
                            <span class="seat-badge">6 Seat</span>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">Grand New Avanza</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 550.000 <small class="text-muted">/ 12 Jam</small></p>
                            <p class="text-success fw-semibold">Rp. 650.000 <small class="text-muted">/ Fullday</small></p>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-person-badge me-1"></i>Driver &nbsp;
                                <i class="bi bi-fuel-pump me-1"></i>BBM &nbsp;
                                <i class="bi bi-snow me-1"></i>AC &nbsp;
                                <i class="bi bi-music-note-beamed me-1"></i>Audio
                            </p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Avanza%20FWD."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Booking Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                {{-- Mobil 2 --}}
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('assets/web/img/2.webp') }}" class="card-img-top" alt="Avanza FWD">
                            <span class="seat-badge">6 Seat</span>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">Avanza FWD</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 650.000 <small class="text-muted">/ 12 Jam</small></p>
                            <p class="text-success fw-semibold">Rp. 750.000 <small class="text-muted">/ Fullday</small></p>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-person-badge me-1"></i>Driver &nbsp;
                                <i class="bi bi-fuel-pump me-1"></i>BBM &nbsp;
                                <i class="bi bi-snow me-1"></i>AC &nbsp;
                                <i class="bi bi-music-note-beamed me-1"></i>Audio
                            </p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Avanza%20FWD."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Booking Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                {{-- Mobil 3 --}}
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('assets/web/img/3.webp') }}" class="card-img-top" alt="Innova Reborn">
                            <span class="seat-badge">6 Seat</span>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">Innova Reborn</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 750.000 <small class="text-muted">/ 12 Jam</small></p>
                            <p class="text-success fw-semibold">Rp. 900.000 <small class="text-muted">/ Fullday</small></p>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-person-badge me-1"></i>Driver &nbsp;
                                <i class="bi bi-fuel-pump me-1"></i>BBM &nbsp;
                                <i class="bi bi-snow me-1"></i>AC &nbsp;
                                <i class="bi bi-music-note-beamed me-1"></i>Audio
                            </p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Innova%20Reborn."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Booking Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                {{-- Mobil 4 --}}
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('assets/web/img/4.webp') }}" class="card-img-top" alt="Hiace Commuter">
                            <span class="seat-badge">12 Seat</span>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">Hiace Commuter</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 1.200.000 <small class="text-muted">/ 12 Jam</small></p>
                            <p class="text-success fw-semibold">Rp. 1.400.000 <small class="text-muted">/ Fullday</small></p>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-person-badge me-1"></i>Driver &nbsp;
                                <i class="bi bi-fuel-pump me-1"></i>BBM &nbsp;
                                <i class="bi bi-snow me-1"></i>AC &nbsp;
                                <i class="bi bi-music-note-beamed me-1"></i>Audio
                            </p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Hiace%20Commuter."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Booking Now
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>
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
