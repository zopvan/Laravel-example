<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return 'Selamat datang';
});

Route::GET('coba', function () {
    return view('coba');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/pegawai/{nama}', [pegawaiController::class,'index']);
Route::get('/form', [pegawaiController::class,'form']);
Route::post('/form/process', [pegawaiController::class,'process']);

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);