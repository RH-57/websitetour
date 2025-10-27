{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <span>LIRA</span>Tour
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('paket-wisata*') ? 'active' : '' }}" href="{{ url('/paket-wisata') }}">Paket Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('sewa-kendaraan*') ? 'active' : '' }}" href="{{ url('/sewa-kendaraan') }}">Sewa Mobil & Bus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog*') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ url('/hubungi-kami') }}">Kontak</a>
                </li>
            </ul>
            <a href="https://wa.me/6282255444203" class="btn btn-contact">Hubungi Kami!</a>
        </div>
    </div>
</nav>
