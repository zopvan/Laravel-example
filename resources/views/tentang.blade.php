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
    @section('judul_halaman', 'Ini tentang')

    {{-- isi bagian konten --}}
    {{-- penulisan section panjang --}}
    @section('konten')
        <p>Ini adalah halaman tentang</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla enim ipsa nesciunt possimus perferendis sapiente porro, doloremque laudantium voluptates magni nihil veritatis adipisci cumque modi velit eaque id deserunt reprehenderit quis!</p>

    @endsection
</body>

</html>