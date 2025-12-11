<?php

use app\Http\Controller\DosenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return 'Selamat datang';
});

Route::GET('blog', function () {
    return view('blog');
});

Route::get('/dosen', [DosenController::class, 'index']);
