<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.index');
});

Route::get('/home', function () {
    return view('home.homepage');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/profil/passwords', function () {
    return view('passwords');
})->name('profil.passwords');

Route::get('/profil/mail', function () {
    return view('mail');
})->name('profil.mail');

Route::get('/profil/accounts', function () {
    return view('accounts');
})->name('profil.accounts');

Route::get('/pesan', function () {
    return view('pesan');
})->name('pesan');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/produk/upload', function () {
    return view('upload');
})->name('produk.upload');

Route::get('/produk/pengiriman', function () {
    return view('pengiriman');
})->name('produk.pengiriman');

Route::get('/penjualan', function () {
    return view('penjualan');
})->name('penjualan');

Route::get('/setelan', function () {
    return view('setelan');
})->name('setelan');

Route::get('/logout', function () {
    // Logika logout bisa diterapkan di sini
    return redirect()->route('dashboard');
})->name('logout');