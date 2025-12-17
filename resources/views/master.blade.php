<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <h2>Blog Mahasigma</h2>
        <nav>
            <a href="/blog">Home</a>

            <a href="/blog/tentang">About</a>

            <a href="/blog/kontak">Kontak</a>

        </nav>
    </header>

    <hr />
    <br />
    <br />

    <!-- Judul halaman blog -->
    <h3>@yield('judul_halaman')</h3>

    @yield('konten')

    <br />
    <br />
    <hr />
    <p>&copy; <a href="instragram.zovanrf">Instagram: zovanrf</a> 2020</p>
</body>

</html>