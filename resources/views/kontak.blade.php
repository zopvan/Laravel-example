<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- menghubungkan dengan master --}}
    @extends('master');

    {{-- isi bagian judul halaman --}}
    {{-- penulisan section pendek --}}
    @section('judul_halaman', 'Ini kontak')

    {{-- isi bagian konten --}}
    {{-- penulisan section panjang --}}
    @section('konten')
        <p>Ini adalah halaman home</p>
        <p>selamat datang</p>

    @endsection
</body>

</html>