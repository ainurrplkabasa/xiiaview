<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('menuSiswa')" href="/siswa">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuGuru')" href="/guru">Data Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuGallery')"  href="/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuLogout')"  href="#">LogOut</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Siswa | Copyright  {{ date("Y") }} @Kabasa
        </div>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>