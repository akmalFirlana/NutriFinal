<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/upload', function () {
    return view('upload.upload');
});