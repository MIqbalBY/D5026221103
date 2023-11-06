<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content "width = device-width, initial-scale = 1">

        <title>
            Sistem Informasi ITS - Pemrograman Web (D) Week 6
        </title>

        <link rel = "icon" type = "image/x-icon" href = "{{ asset('img/qb.png') }}"/>

        <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <script src = "https://cdn.jsdelivr/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src = "https://cdn.jsdelivr/npm/popper.js@1.16.1/dist/umd.popper.min.js"></script>
        <script src = "https://cdn.jsdelivr/npm/bootstrap@4.6.2/dist/bootstrap.bundle.min.js"></script>
        <script src = "{{ asset('js/week6/operasi.js') }}"></script>
    </head>

    <body>
        <div class = "container">
            <form>
                <div class = "form-group">
                    <label for "bilangan1">
                        Bilangan 1:
                    </label>

                    <input type = "number" id = "bilangan1" class = "form-control">
                </div>

                <div class = "form-group">
                    <label for "bilangan2">
                        Bilangan 2:
                    </label>

                    <input type = "number" id = "bilangan2" class = "form-control">
                </div>

                <div class = "form-group">
                    <label for "nrp">
                        NRP:
                    </label>

                    <input type = "text" id = "nrp" class = "form-control">
                </div>

                <input type = "button" value = "Penjumlahan" class = "btn btn-primary" onclick = "tambah();">
                <input type = "button" value = "Perkalian" class =  "btn btn-info" onclick = "kali();">
                <input type = "reset" value = "Clear" class = "btn btn-danger">

                <h3>
                    Hasil Operasi =
                    <div id = "hasil"></div>
                </h3>
            </form>
        </div>
    </body>
</html>
