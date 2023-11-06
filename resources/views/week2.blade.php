<!DOCTYPE html>

<html>
    <head>
        <title>
            Sistem Informasi ITS - Pemrograman Web (D) Week 2
        </title>

        <link rel = "icon" type = "image/x-icon" href = "{{ asset('img/qb.png') }}"/>

        <style>
            h2
            {
                color           : rgb(255, 102, 0);
                text-align      : center;
                text-decoration : line-through;
            }
        </style>

        <link rel = "stylesheet" href = "{{ asset('css/week2/my_style.css') }}">
    </head>

    <body>
        <!-- CSS dengan cara Inline (Khusus hanya ini saja yang beda) -->
            <h1 style = "
                        color           : mediumseagreen;
                        text-align      : center;
                        text-decoration : underline;
                        ">
                Heading 1
            </h1>

        <!-- CSS dengan cara Inpage (Khusus hanya halaman ini saja yang beda) -->
            <h2>
                Heading 2
            </h2>

        <!-- CSS dengan cara External File (Biasanya supaya 1 web seragam) -->
            <h3>
                Heading 3
            </h3>

            <div class = "ratakanan kotak1">
                Harga: Rp35.000,-
            </div>
            <br>

            <div class = "ratakanan" style = "color: blueviolet";>
                Diskon Besar
            </div>

            <img src = "https://img.freepik.com/free-vector/badminton-championship-poster-template_73621-1008.jpg?w=740&t=st=1699121820~exp=1699122420~hmac=de46346c793ba5bdbaff878a07323fc7e25e7eb990d45ee2e9a1719426ff09f5">
    </body>
</html>
