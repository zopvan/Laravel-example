<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function index($nama)
    {
        return $nama;
    }
    public function form(){
        return view('formulir');
    }
    public function process(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat: ".$alamat;
    }
}
