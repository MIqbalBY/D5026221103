<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content "width = device-width, initial-scale = 1">

        <title>
            Sistem Informasi ITS - Pemrograman Web (D) Week 7
        </title>

        <link rel = "icon" type = "image/x-icon" href = "{{ asset('img/qb.png') }}"/>

        <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <script src = "https://cdn.jsdelivr/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src = "https://cdn.jsdelivr/npm/popper.js@1.16.1/dist/umd.popper.min.js"></script>
        <script src = "https://cdn.jsdelivr/npm/bootstrap@4.6.2/dist/bootstrap.bundle.min.js"></script>

        <script>
            function validateForm()
            {
                console.log("Ini baris 23");
                // return false; // Dimanapun ketemu return akan exit function, perintah dibawahnya tidak dijalankan
                console.log("Ini baris 25");
                return true; // Dalam 1 function, bisa lebih dari 1 return
                console.log("Ini baris 27");
            }

            function validate()
            {
                var bilangan1 = document.getElementById("bilangan1");
                var bilangan2 = document.getElementById("bilangan2");
                var nrp = document.getElementById("nrp");

                if (bilangan1.value == "" && bilangan2.value == "" && nrp.value == "")
                {
                    alert("Bilangan 1, 2, dan NRP harus diisi");
                    bilangan1.focus();
                    return false;
                }

                if (bilangan1.value == "" && bilangan2.value == "")
                {
                    alert("Bilangan 1 dan 2 harus diisi");
                    bilangan1.focus();
                    return false;
                }

                if (bilangan1.value == "")
                {
                    alert("Bilangan 1 dan NRP harus diisi");
                    bilangan1.focus();
                    return false;
                }


                if (bilangan2.value == "")
                {
                    alert("Bilangan 2 dan NRP harus diisi");
                    bilangan2.focus();
                    return false;
                }

                if (nrp.value == "")
                {
                    nrp.placeholder = "NRP harus diisi";
                    nrp.focus();
                    return false;
                }

                if (isNaN(nrp.value))
                {
                    alert("Format harus angka");
                    nrp.focus();
                    return false;
                }

                if (nrp.value.length != 10)
                {
                    alert("Format NRP tidak valid");
                    nrp.focus();
                    return false;
                }

                else
                {
                    return true;
                }
            }
        </script>
    </head>

    <body>
        <div class = "container">
            <form action = "https://portal.its.ac.id//" method = "get" onsubmit = "return validate();">
                <div class = "form-group">
                    <label for = "bilangan1">
                        Bilangan 1
                    </label>

                    <input type = "number" id = "bilangan1" class = "form-control">
                </div>

                <div class = "form-group">
                    <label for = "bilangan2">
                        Bilangan 2
                    </label>

                    <input type = "number" id = "bilangan2" class = "form-control">
                </div>

                <div class = "form-group">
                    <label for = "nrp">
                        NRP
                    </label>

                    <input type = "text" id = "nrp" class = "form-control">
                </div>

                <input type = "submit" value = "Buka myITS Portal" class = "btn btn-primary">
            </form>
        </div>
    </body>
</html>
