<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\pegawaiController;
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
Route::get('/pegawai/{nama}', [pegawaiController::class,'index']);
Route::get('/form', [pegawaiController::class,'form']);
Route::post('/form/process', [pegawaiController::class,'process']);