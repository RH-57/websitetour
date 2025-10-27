<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lira Tour - Paket Wisata</title>
    {{-- AOS Library --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <link href="{{asset('build/assets/app-Cn8k3xrs.css')}}" rel="stylesheet">
</head>
<body>

    @include('web.components.header')

   {{-- Hero Section --}}
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text">
                    <h1>Paket Wisata Jogja Terlengkap</h1>
                    <p>Buat Momen Liburan Berkesan Bersama Zaza Tour</p>
                    <a href="#" class="btn-hero">BOOK NOW!</a>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Tentang LiraTour</h2>
            </div>
            <div class="row align-items-center gy-4">
                {{-- Gambar kiri --}}
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('assets/web/img/about.jpg') }}" alt="Tentang Lira Tour" class="img-fluid rounded-4 shadow-lg">
                </div>

                {{-- Deskripsi kanan --}}
                <div class="col-md-6" data-aos="fade-left">
                    <p class="lead text-muted">
                        Lira Tour adalah penyedia layanan wisata Jogja terpercaya yang siap membantu Anda menikmati liburan berkesan.
                        Kami menawarkan paket wisata, sewa kendaraan, serta layanan gathering dan honeymoon dengan pelayanan profesional.
                    </p>
                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Paket wisata lengkap dan fleksibel</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Driver & guide profesional</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Harga bersahabat dan transparan</li>
                    </ul>
                    <a href="#" class="btn btn-about mt-4">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>

    </section>

    <section id="why-us" class="py-5 why-us-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-white">Kenapa memilih kami?</h2>
                <p class="text-white">Kami menghadirkan perpaduan sempurna antara petualangan autentik dan ketenangan pikiran. Dengan pemandu lokal yang penuh passion, kami membawa Anda menjelajahi keindahan tersembunyi dan menciptakan cerita personal yang tak terlupakan.</p>
            </div>

            <div class="row g-4">
                {{-- Card 1 --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-stars text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Pelayanan Profesional</h5>
                        <p class="text-muted">
                            Tim kami berpengalaman dalam memberikan layanan wisata yang ramah, informatif, dan profesional.
                        </p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-geo-alt-fill text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Destinasi Terbaik</h5>
                        <p class="text-muted">
                            Kami menghadirkan berbagai pilihan destinasi wisata menarik dan populer di Yogyakarta dan sekitarnya.
                        </p>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-currency-exchange text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Harga Bersahabat</h5>
                        <p class="text-muted">
                            Dapatkan pengalaman liburan berkualitas tanpa perlu khawatir soal biaya, dengan harga jujur dan transparan.
                        </p>
                    </div>
                </div>
            </div>
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


    {{-- Testimoni Section --}}
    <section id="testimoni" class="py-5 bg-gradient-testimoni">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-white">Apa Kata Mereka Tentang Zaza Tour Jogja?</h2>
                <p class="text-white">
                    Ratusan pelanggan puas telah merasakan serunya liburan bersama Zaza Tour.
                    Simak cerita dan pengalaman mereka selama menjelajahi Jogja bersama kami!
                </p>
            </div>

            <div class="row g-4 justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <!-- Testimoni 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-lg p-4 h-100 rounded-4 text-center card-testimoni">
                        <img src="{{ asset('assets/web/img/rahmat.jpeg') }}" class="rounded-circle mx-auto mb-3" width="70" height="70" alt="User 1">
                        <p class="text-muted mb-3">
                            “Pelayanan bagus, sopir ramah, mobil bersih, dan jadwal sesuai.
                            Terima kasih Zaza Tour, liburan kami sangat menyenangkan!”
                        </p>
                        <div class="text-warning mb-2">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="bi bi-star-fill"></i>
                            @endfor

                        </div>
                        <h6 class="fw-bold mb-0 text-primary">Rizky Saputra</h6>
                        <small class="text-muted">Jakarta</small>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-lg p-4 h-100 rounded-4 text-center card-testimoni">
                        <img src="{{ asset('assets/web/img/lintang.jpeg') }}" class="rounded-circle mx-auto mb-3" width="70" height="70" alt="User 2">
                        <p class="text-muted mb-3">
                            “Baru kali ini dapat biro wisata yang jadwalnya realistis dan pelayanan cepat.
                            Eksekusinya on time dan profesional banget!”
                        </p>
                        <div class="text-warning mb-2">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="bi bi-star-fill"></i>
                            @endfor
                        </div>
                        <h6 class="fw-bold mb-0 text-primary">Nadia Permata</h6>
                        <small class="text-muted">Surabaya</small>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-lg p-4 h-100 rounded-4 text-center card-testimoni">
                        <img src="{{ asset('assets/web/img/user3.jpg') }}" class="rounded-circle mx-auto mb-3" width="70" height="70" alt="User 3">
                        <p class="text-muted mb-3">
                            “Pengalaman booking sangat mudah, stafnya ramah dan sigap.
                            Armada lengkap dari city car sampai bus VIP. Recommended!”
                        </p>
                        <div class="text-warning mb-2">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="bi bi-star-fill"></i>
                            @endfor
                        </div>
                        <h6 class="fw-bold mb-0 text-primary">Andi Prakoso</h6>
                        <small class="text-muted">Yogyakarta</small>
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
        AOS.init({
            duration: 1000,
            once: true, // animasi hanya sekali
            offset: 100 // jarak mulai animasi
        });
    </script>
</body>
</html>
