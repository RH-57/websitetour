<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home.index');
});

Route::get('/hubungi-kami', function () {
    return view('web.contact.index');
});
Route::get('/tentang-kami', function () {
    return view('web.about.index');
});
Route::get('/paket-wisata', function () {
    return view('web.tour-package.index');
});
Route::get('/paket-wisata/{slug}', function () {
    return view('web.tour-package.detail');
});
Route::get('/sewa-kendaraan', function () {
    return view('web.rent-car.index');
});
