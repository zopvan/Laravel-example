<?php

namespace App\Http\Controllers;

class DosenController extends Controller
{
    public function index()
    {
        $nama = 'Zovan Rizza Fannevi';
        $matkul = ['Algoritma', 'Probstat', 'Kalkulus'];

        return view('biodata', ['nama' => $nama, 'matkul' => $matkul]);
    }
}
