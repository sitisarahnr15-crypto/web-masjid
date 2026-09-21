<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/lokasi masjid', function () {
    return view('lokasi masjid');
});

Route::get('/whatsApp', function () {
    return view('whatsApp');
});

Route::get('/Reservasi-akad', function () {
    return view('Reservasi-akad');
});

Route::get('/fasilitas/masjid', function () {
    return view('fasilitas.masjid');
});

Route::get('/fasilitas/pendidikan', function () {
    return view('fasilitas pendidikan');
});

Route::get('/fasilitas/pendidikan/madrasah', function () {
    return view('fasilitas.madrasah');
});

Route::get('/fasilitas/pendidikan/tk', function () {
    return view('fasilitas.tk');
});