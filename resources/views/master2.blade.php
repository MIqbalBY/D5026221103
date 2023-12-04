<!DOCTYPE html>

<html>
    <head>
        <title>
            @yield('title')
        </title>

        <link rel = "icon" type = "image/x-icon" href = "{{ asset('img/qb.png') }}"/>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <link rel = "stylesheet" href = "{{ asset('css/index/styles.css') }}">

        <style>
            footer
            {
                text-align: center;
            }

            img.logo
            {
            width: 40px;
            height: 40px;
            }
        </style>
    </head>

    <body>
        <div class = "container">
            <nav class = "navbar navbar-expand-sm navbar-dark bg-dark">
                <!-- Brand -->
                <a class = "navbar-brand" href = "/"> 5026221103 - Muhammad Iqbal Baiduri Yamani </a>

                <!-- Links -->
                <ul class = "navbar-nav ml-auto">
                    <!-- Dropdown -->
                    <li class = "nav-item dropdown">
                        <a class = "nav-link dropdown-toggle" href = "#" id = "navbardrop" data-toggle = "dropdown">
                            Database
                        </a>

                        <div class = "dropdown-menu">
                            <a class = "dropdown-item" href = "/pegawai"> Tugas Pertemuan 14 (Pegawai) </a>
                            <a class = "dropdown-item" href = "/nilai_kuliah"> Tugas Pertemuan 15 (Nilai Kuliah) </a>
                            <a class = "dropdown-item" href = "/bolpen"> Tugas Pra EAS Kelas D (Bolpen) </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <hr/>
            <br/>

            <!-- Bagian judul halaman blog -->
            @yield('judul_halaman')

            @yield('header')

            @yield('isi_halaman')

            <!-- Bagian konten blog -->
            @yield('konten')

            <br/>
            <hr/>

            <footer>
                <p>
                    <img class = "logo" src = "{{ asset('img/qb.png') }}" alt = "QB"> <br>
                    <a href = "https://github.com/MIqbalBY/D5026221103"> https://github.com/MIqbalBY/D5026221103 </a> <br>
                    <a> Copyright &copy; 2023 Muhammad Iqbal Baiduri Yamani </a> <br>
                    <a> All rights reserved. </a>
                </p>
            </footer>
        </div>
    </body>
</html>
