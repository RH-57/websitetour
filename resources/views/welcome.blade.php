<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lira Tour - Paket Wisata</title>

    {{-- Panggil file hasil Vite --}}
    @vite(['resources/js/app.js'])
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
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/hero-image.png') }}" alt="Hero Image" class="hero-img">
        </div>
        </div>
    </div>
    </section>



</body>
</html>
