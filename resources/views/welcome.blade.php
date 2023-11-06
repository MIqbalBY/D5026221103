<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "utf-8"/>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no"/>
        <meta name = "description" content = "Personal Website"/>
        <meta name = "author" content = "M Iqbal BY"/>

        <title>
            M Iqbal BY - Personal Website
        </title>

        <link rel = "icon" type = "image/x-icon" href = "{{ asset('img/qb.png') }}"/>

        <!-- Font Awesome icons (free version)-->
        <script src = "https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin = "anonymous"></script>

        <!-- Google fonts-->
        <link href = "https://fonts.googleapis.com/css?family=Varela+Round" rel = "stylesheet"/>
        <link href = "https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel = "stylesheet"/>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel = "stylesheet" href = "{{ asset('css/welcome/styles.css') }}">
    </head>

    <body id = "page-top">
        <!-- Navigation Bar-->
        <nav class = "navbar navbar-expand-lg navbar-light fixed-top" id = "mainNav">
            <div class = "container px-4 px-lg-5">
                <a class = "navbar-brand" href = "index.html">
                    <img src = "{{ asset('img/qb.png') }}" width = "50px">
                </a>

                <button class = "navbar-toggler navbar-toggler-right" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navbarResponsive" aria-controls = "navbarResponsive" aria-expanded = "false" aria-label = "Toggle navigation">
                    <i class = "fas fa-bars"></i>
                </button>

                <div class = "collapse navbar-collapse" id = "navbarResponsive">
                    <ul class = "navbar-nav ms-auto">
                        <li class = "nav-item">
                            <a class = "nav-link" href = "#about"> About Me </a>
                        </li>

                        <li class = "nav-item">
                            <a class = "nav-link" href = "#education"> Education </a>
                        </li>

                        <li class = "nav-item">
                            <a class = "nav-link" href = "#skills"> Skills </a>
                        </li>

                        <li class = "nav-item">
                            <a class = "nav-link" href = "#hobby"> Hobby </a>
                        </li>

                        <li class = "nav-item">
                            <a class = "nav-link" href = "#contact"> Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class = "masthead">
            <div class = "container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class = "d-flex justify-content-center">
                    <div class = "text-center">
                        <h1 class = "mx-auto my-0 text-uppercase"> Personal Website </h1>
                        <h2 class = "text-white-50 mx-auto mt-2 mb-5"> Welcome to my website programming page project. </h2>
                        <a class = "btn btn-primary" href = "#about"> Learn More </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Me-->
        <section class = "about-section text-center" id = "about">
            <div class = "container px-4 px-lg-5">
                <div class = "row gx-4 gx-lg-5 justify-content-center">
                    <div class = "col-lg-8">
                        <h3 class = "text-white mb-4"> Hello, my name is <span class = "text-warning"> Muhammad Iqbal Baiduri Yamani </span>  </h3>

                        <img class = "img-fluid" src = "{{ asset('img/welcome/iqbal.png') }}" width = "300px" alt = "Muhammad Iqbal Baiduri Yamani"/>

                        <p class = "text-white-50">
                            I'm a dedicated student with a deep passion for crafting innovative and user-centric mobile applications. I'm driven to contribute my skills and further my knowledge in a collaborative environment that allows me to enhance my expertise in UI/UX design and mobile development. My goal is to create seamless and visually appealing user experiences, making technology accessible and enjoyable for everyone.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education-->
        <section class = "p-5" id = "education">
            <div class = "container">
                <h1 class="text-center pb-4"> Education History </h1>

                <div class = "row text-center g-4">
                    <div class = "col-sm" id = "Card_1">
                        <div class = "card bg-light text-dark border pt-3 px-2 pb-1">
                            <img src = "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBMTExcTFRUYFxcZGh0aGBkaGxoZGRkdGiAbGhkZHRwcHysjGhwoHRoYJTUkKS0uMjIyGSE3PDcwOysxMi4BCwsLDw4PHRERHTEpIyk0MTExMTEzMzkxMTMxMzEzMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMf/AABEIALYBFQMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAAIDBAYBB//EAEIQAAIBAwMBBQUGAwYFBQEBAAECEQADIQQSMUEFEyJRYQYycYGRQqGxwdHwFCNSFTNTYoLhcpKywvFjg5Oi0iQH/8QAGQEAAgMBAAAAAAAAAAAAAAAAAwQBAgUA/8QAMBEAAgIBAwIFAwMDBQAAAAAAAQIAEQMSITEEURMiQWFxBYGhFDLwscHRFSNSkfH/2gAMAwEAAhEDEQA/APQdPdvi69q8FdSDctXFUiQpEoyz7wkdcg/GAPatre5dHZRbCztxB3IVPiG0ALcJ8UQD6GF2votamrLoXNrPiBMKHmAqSAWHl+tWeyNWS95bgba+y1uLF7SMV8K7CAbatMzx4guCKqyJkYXyBLK7KtjiUPYvWJZs3rzvdK22Ft07uSIPgcAMYwYIzx5QKKn2z0vld/8Aj/3o3ouz7drvNix3jl2HSSApx5GJ+ZrEe13sqlpxetsVtuY7vPhbnwn+mAcdPhxbKxRbXgSiBXamhhvbXTdEvH/Qv5vUZ9t9P0tXv+VP/wB1jv7JHm31pf2Ovm31pA9e3YRsdKk159t7PSzd+ewf91MPtxb6WLnzZBWU/sZfM/WuXuxkCkiZgxmq/wCoN2Et+lSeg+znb9vVb1Cm26wdpIaVP2gR64+lF68W7F7Suaa+rj3lPHRgcFT6EV7BoNct62t22pKsJBlfmDnkGRWhhy+It+sSzYtB24lmlTSWiYHzaPvANBe0PabT2jtNxHf+i0Wut9FUAfM0eBCk8Q3Sisi/tPqbhi1pgB0a6Sv/ANVJNVdVqNcw3XNWLQydttUSAOfE0nqKqcija5YYG9ZuIpjOByQPiQK8zuiw6uzay7d2wWJuv1PAiJ+VQNptDtDbbrS23b/MLzE5UmeBXeJ7S3gDvPTbussrzctj/Wv6023r7LcXbZ+Dr+teYtp9KNsaW4xbdC7YaE2yYZv81TroNHdACW8sm8YiAG2kHPvTOPSo8XbiR+nTvPT0YHgg/AzXSK8gu6LTW32kXbbdCneweuI5j0otoNO43Lb119WSNy95IUHKyGHkK4Zh2nHph6NPSaVYfS9o69QGTUWrynjvLYz/AK7ZH4Ve0/tPfTF/Tx/ns/zF+aFg30mrDIp9ZQ9Ow43mqilFDOy+27F8xbu22b+gzbf5o2aIgv1VfkxJ+hUUW4EqRyI6KEdrdv2NPc7tw7NEnYobbPAORmp+2+0xp7TXGQ4wolYZj7o5n7q8zRn1F/bJLOdzt95P5Up1XVeENuYz0vS+JZbiboe12m6rdH/tn8iaePa3Sf1XB/7Vz8lrKv2L5O31qM9jt/iNWcPqzdhHf9PxdzNgPavR/wCKw+Nq9/8Ainj2n0X+MB8UuD8VrEnsi5/iNTtP2Ledgq3JJMCcD5mrr9VZiAAJVvp+MC7M3/Z/a+mvtstXFdomBMwIk5HqKvRVHsLshNOm0eJz77kZb0HkvpRCK10LFd+ZmOq6vLxORSiuxSir3B1ORSrtKuudUb2lpr1xYRktkGQTLg4IgjHUg/Kouy+xksKyoff98wCTE4zIC5bH+Y0X21yKWFXccs1UrC15sx+YH/SBQD20QBLcDJY55OAOpz1rTxWX9uDm0PRj+FA6pqxNCYR5xMtdcL+QpircYFhwPoOvUSf3xT7q+JTE8iD1mDH3R86svbAIC3IU+8CDPyIHU4PlHWq9DgxHHqYWT39J3VZMmvSDQlfT3pO1hB/GOR8ak17xbY+lQSrX/APComepmQpPqQW+QFP7VP8AKb5fiKzOtRMefSnG32jfSs7Y7aZHW27t654FSPOTNaT2b1PaGnRrdvutrGfHubaeCVGOcc+VU+yrZ3fuK0GjtxWhhNKCOZTISdjB/aLuwLay/cuZ92dlqfRE5qO1rFGxNPaTxA5PgGOVIAmeKI9raUXLZAEsPEuduR6gYxNZ6ykMAXZG3AoAe9ZYlWJIED/ajhg3MFv6Q9oNUbiMNpBO5GE+6eDnyoFtvvZtKQbieNVaCWQsCjIY+zuAIPpRbsNwFOHAndubaS88tj4fhVTW67UK11d+0CdpAUZG1oBjnaTz8qgGjtJI7x2l0jvaKd3dDeFt91lKhkIIUKMhTmmN2NeuEttt5dSbbXHKmA0+IjqW4HlUv8U72UQF2fePEu5lwwJBYqp90zkR8Yqpf7NvFVAtnw8AspBePE+SfCSB5NXajfNSahT+xHfYHCWlth122brSN+0jPI4aQfMU7snS9y6s7W4SyLZ2n/MWDEdJBB+JNR9m6a4juSoWQwLAibhZiwLY5EkZnk1QTsu+LfdqAcq5YkeIgCFP+oCDxAFRd7XO0zQdoWXa7avW1DLbW5iQCWYAKPxoHp9LqLPekje1y0xJUGe8mQDnJ8ZiOi1P2BYuWtQ7tbcKxYGNkeJhtODkAefHSpO2l1C33a2H2mABkiUXeCPQksp84AqoajpsTivrF2d2ras6dU2vvRFXYUZWZsCBIzLeU1T0/at1bF1zL3e92orKRBZVYrtOQq+L6VLY7RddilnZTc8TuvCcCSAIltxEge6R5U7s3U27zG66BGQF2PQEyokdT3YGatdWSJFRartDTXR/NQEbUIaJO5wWCrHikATjzq92fcvogfS6lmtnhLn8238BuO5cjzoJpdEFVGstuzcEM3dP4wo8JzDKAo+dF+w1uWrYV8tJLGOSTJ+Px61LMB+0yR2Mq+0b6/Uld9u2AgMBXO2Ty2czGKXsZpLtm63eoolTDAyfhxgUfS8TyB9KrQ3eA4jMR61n9XZRmPMZxPVKBtLVxaDdoa19xS0F8Il2YGFngepPlnmjJcGhVzl9sbg+4jOcQJjJGIx+NI/TigyEut/PAv1let1lKU18cyrZ7RuKZuL/AC5gsQVdPIuvkfMUe7OIFy2f8w+81ntFeuXGCsvhAO4lAu7eZCkDw4gjziOYovoW8CkeQim/qIxo6uigEEXUW6JndSGYkHvzNkLKHgD4qdp+qxTja8mYesz/ANU1kU7ZuFgpBKmcBiGxJHlkxH6UX0HbFp0CeJcZIkx1GYzI8vOMVq4eqV+dovkwFJc0+qmQXBIbbG0g/l69Knt3i07drAGD4iPuK0M1elwtxWJ8WMYz1jr86pWO1xbvZkq2OMR0yJEzwJijHKoNGD8IncTSbj/SfkV/WlUI1dsxLhTEx6GY4+BpVbxF7yvhmGYrkVS7E1yXrVtg2WRWKkguJAORz86IUI7GoxIyKyXtuf5tsf5PxJ/SthFYn22f/wDoA8kX8WNK9Yf9ow3TjzwFcQERUI03+d4+P5xNS76cDWOubIgpSR8R9sat+4AxaayqCF+JyST8Scmou1z/ACj8R+NTBqrdrH+X8xQiSWsy1ADaD+y1E8+fn9KN2Hg+n4f7Vn9A94NtW3uloHiAmeB581d1Wv1FtJFgAyBLvAEzBjbMY+GRWzjI0DeJvYMJ6oq6Og6jEdD0P1oBqu7RUF27bQrwGXc53ZYFByQ3BzzxTHW9dEtqBtglraBrQIBHhkeMyCDzwDVP+GtgzbtDYzcwxeU5VWOc9fU/AUYOAOZQ1L66oYe3YuPPD3D3VvncSoOYLCcCKIaSxrrwLAWrSnI2J3jkx/mIHEZjrWcS4yMEcBF96DLKZI5IJB/DNaW1r7lpgiwx2yCCeRtbJPIAJ+HrOaHJuL4kX2h3SeyzOVL6q/cSCSqG1a+A8Kk8+vzxkLqezdP38It545t3Lt1p4mTvBH3R91Xextcybt7HaNrHcTIKx4TxAjcRHTzxUvaii5bZpCuCSGBgANnpnM465Jjmr5cyBQVIg0Dlt5SudjadbwIso6ERG5ipMmcloEAEczXLvYGlYKwtlAxOUN2RgEESw8Mz59OlV9RqSEO/HMRIgT08zJ+lWF1ltkJZiGU7cgwwI9R8eo9cUsM7FSKhSK9ZX/sawqAJdvhpP8wXrgAGYAUyDwRx+lCWuam23h1lyDxuKXD8wV/TirPaDsrhiQyhSMwFkR4toMbQSOTyM84hbUNcK3DtADDHuhgcyWAknPX/AGEB2JsydVCWL2u1vdqzGzetus+NO7fiSsK3SDmIxQ+92jbLRdtXbRPvFDuDAgAgxnaQoHHSrq30tahf5YcZGyZXMtG77UFo29TNQajRuTukMANxBO1jkLtXaZJXcBA6Y9KMmQGpBadS2t5f5V5XKglFUbbmSXAIJ5LbZOI2DzrUWLaqqqFgcdT+tedX9PvYmB7x4BPwjEj5+Xxo97I/xDkqNTsHCi4rXVLDOwfaGOgJ4OKKbbYSupRNW4jgZqG4/WINWbOg10lTbssy87bxHOQYZJWfKhDay+X2PZCjMsLgaCPTaKV6nGQhuHxMGbaFbRwKqa3S7mFxSQw5ExuHkf3/ALz2T4RXd1YWPI+J9Sxt0V10tBFvTXmDIwKAwNwdjjEjI6iRIPU0XsqFAA4FKa7NF6nq8metQAHYD8weLp0x8fmUNYhVPCGZtxMEgkbtwHWc9PLymK72HqdNcti1c3i5M7o8c9R6DzifrFELV6yDNyC4wggSBBAb5SfLJPqaj0vZSuztbRFZlKqw8LCWmRCz+PTyFbGFgqLW5Iibiyb9IS7O1I912KKoOSTnJHumTuIA+EdaodtaVGdC0C20GVyQsYKieeRHoKo6zSpZUKXLMrZZskEH3SfTjHl0MiuajULctG4yQSwAXkHHvHY2DAnGIk0Ytq8pG4MoB6+kJ67X6bTN3S2GvkAFmLZE5AyJpVm/4+5bgwbgZR9rYVIkEEQ3oenzpUz4uP8AggdDfww32X2ha0Vout17moe2iqHM2vFtchTPKqTExlT51pfZXtfUai425B3KyoYlTc3DaRuCmACGPTpXielvXbRkOU/HMz4cyPlWs9m/b25pl7vurbKT4iq925jE4lSfUj41fcwhSbj257F1tz+bpNS6kDNrvDbUx1QjAPo2D5ivJO1dbrRcZbxui4MMHdtw8uekcdM1632L7caC9G5zab/1eJ9Hyo+6vOv/APRtUG1t5lIILABgZBARRg0LINqlDr1AKaJmd/jtR53P+dqX8bqfO5/zmqxuVwPQfCEa8DJ/zMt/xmp87n/O1Mva6+B4i8erk1EjmaJuN6LI5FDddMV6nxcNHUSDLPst2uveW1utCb1lj9kTmfStF27tLFVm4uwu7iAGLeLbjjHpE5zWJ0/Y927dVLUbmmASFGAScn4VuPY7RX7cpqkHdnwqHYn3ZOFGGEhT+ld4YbjaXx5Sw3gC7oWFvvEO5C0wFJYgj4ZyDgA8VXua5Gt92YlYKy3BPvDiBJkxP2q2WvspbVjb2oEubhDESACWWJnr8Mng1j9VoGdSyW1CMoYkhMCYUjPvE4xHHxqAVIoy5EsdpsWO1GUNaXd18eZMTEkbiZiRt86u6J7SIoSQ9ycMCWBYYSW6A9T5z1oT2gjQr3HQJCK8QfIqoKwDg/cav+zJV7TlZJBMZLGIGD04noMj60yE6Be9SV2MJpZI8QbaSQrFpzwYgZBWeB8cVZ7Z1i203gy0YAIBCkMFxuJOYkmYEUI1GuWO5RGENLk+7K55MjhZiR7rAUP7Q11whbQALTMkDeQYhc8RxIpdcZYgwgapePaIAIFwl2n3Q0gEL4OQJOB1GOKHazUsxEb12xtETtxGYPiJmcgGeOKd2FpBqNto3haub2UlrZYMXIxuX3o2dT1x66277NWSuIZbKqzkvCXWBAKnfJVUA3FRn+aBIrSx9OumAZ94J0CMoVH8V24Bt3FWJU4dSmdxypAJnwnHEzdn6QIN/wDdrtITvC0yfDJkQFwZ/OaPdk9imLQuG0iFpW1BY3NqydryCsEsYM+7memX9rk7lu7XvLjOQ218sJkhIDEiSePTg9a5sHk5kq9moK1ABUi2/htzuGMsZDEGfGMffirQuCy/dpFzwQQ43rJw+0DKR0M9JxTuy7d+0GuINpczswYzuJKniJECDiapapSd9wkqxMkkf18+HgCCeMUNWQLQ5klZLq9SSEYhZExgsokyOZhpH3meaaFYMHQy3iiRInPBxnPlz99XU6e/aZJIIfIEhlyTCgKcYIxjNF+zfZm9eZTuVAw3ks32c+IAZXAnI6/Ci6WvaUPG89L9lHH8Ob9xk3OWe4+6QIwNx6QAMcV5V7Xdvh7jraPg3N4hgtkx8BWi9oe9vBdHZ3WrNuFKXPCXY+6C4kHkAA8H1istq/ZxrOodLhB2EREwQQGHOetEzebc+kEchxrseYMtPeYSJj1JpG9e/q/+5or2gu22SuMUApVVDXCdImTOCxYgXXMsfxN8faP/AMhpDVajoz/K41Via4rkGRg1Y4xG26V62c3DXZ+iv3YYu6kmAdxJMeUkTEeYrZ+zOt7hXuEsO72wLvikMfEQSAxciSOkAUD7K0q3bRcXFW5a8aqZAIYoMvPhHvD5+oobqdewUK1xibYKhdzNkf5TiIMen4TjOncj4ii6mUWfmbPVdrLrG2XSgHvIMNA3AQZgq3n8R8Kr3NdctMyqrbQOGWGYsYwRg7vjgEecVjtPeeZLbQ8SZjrInrHWfhWgVndDctMDAKsTltwPvBp8oIkDHlGAZgwbVf8A7DpVaZDr9cWclrhBkzKcn4AiMbfPpxSoJq9Pc3ksSSeTOT6mlV795Fe0F22HOZ6ZwPLp6U8QeD8IGOs+vSmXLMfEe8OIiB8TyKagIg5EH4c5HT0rRuRJ7ecHB/PpT9YfCo9P0ptxiAJj4T9+Mj503tJuPhQcnIkLvlX7yrNSLFQipFro/JUOaLJ7if8ACPwFB1NF+i/8IoGX0mb9TOyj5hH2fYC+rbd5AYqvmwB2/DPX0rRa6+7XD427pQxMeE5EgyzZkwBAkRz0rP8As1pLl68VtvscIzK2MRA6g9CfWtEAlu21q5MlpLkqAe7gjxIMJCiBHX1oZUne9oPpT5PvBa6V0vG5dtsVYFAGYvcaSyqi7ZwQJPQfirujVg9sAqqqAzS0AjgTEn7OIEweKsdu9qragAw7mHIIK7QZAG7I948iY+IoJrdE4c3A6sp3P4pETMQOGjwcAAzGRUEEnmo0IAuaEzAlhJI524yTH/DBJMcfOtj2To1tqgW2qO6wGUKwkxAO7xEweeCT1gE5rV2mQi5cUAsQyw25WDMDHJ8O05k8RVj+KY3BaAFrxe8WMhFzCuMDGJHM9c1OVSwAH3kCGO0rti2HDSTCh42Y2krgRzndiZwfOq/fllDBFNu5CREgCYG4iTkbscyB5wb+p1GmMK9pbaqBJG6LkxLFgYMqCSDzu6dYdNuSzckMFyQ7AZH9IKsQAJInrOOkBKhACN5wJuR2VTT2nud3sYyoZTvViNzFkHRcgT6xzNQ6vVBSGLpcW4pYkeIHcFw6ODLbtwkZJUyBQu/2rcWXa5JHhW2ZgD7o/QRVbSarYtxQAXcqVmAq7fFuk9ZxtxMfAFzCBZY+sG2/E0Wi7fveAMjs6KWe6ZFyFEjLNmNpkdYJ61xu01u3TcubGChdzBIJ2cHHudF8uKoX+1rmpd0RjbW5FxxvJEqoAXpkmBmYn5UP1Cm2xUndiTIbyDERjIIOQSDBq+c6xpuSg0m6mqv2xeKMrlYwrqo3EkD3QuR8uJHqKi1Ns6gJagFgx8YJwZI8UHAMn1iM9KoWA/drdcou1QGk+PaT7wUe9IJ5I6VZt6vTosrbQNI8KkkyJUFsYTIMATPxpJAFbvCMb4kV/sr+HKkHvNzKvdHwSpPuMTjOOJ65xILaO6gHfAd2TtTwt4ZhfCwUyFDR068+drR6rTXXFprZad570JAB8WwtIngNmZlhxVPX9mWbeoU3bzFbiEqVVtoYgKCQJMSOefCvPFGIZqo7c+84I1HaTLqGvtaDEFUJDqhCq53YaQIhVZcAT4ccmH+1lopqWQxhbYxke4o561f7Fe1p2DBUb+7LHxgyB45Y++0yZIHl6UP9qtULupNwcMF9IxEVfIwCVdmJdXjdUsipnu1B/Lb4VmjWn12Ub4H8Ky5NDxHmM/SW8jD3iNNp1cNGmtNT2TdZbBZTtJVVZpIIUlciOSCBA55Nc7Yu2ktd2qFWIXvCTMso8ULyJYg+LNRdkbhpmuK6qV2iGIEhiyk58uZ6YqbtX+GUK+24zxDLuTaIwD4SYE9BnHWgLdzNRdj7E/1gC34ztnJ+ZnH3Vc7C1dy1c2hcN4WOenMGcGD8Yop7L2N57wBRAZWkGRO4qUIIIGYOfwFWNalkuncMyENIbwmRgEiC0kZ5ifvqXa7UjaWGNv3R/anZ7yCERgSSOARwM7oJOPupUYZn2qLcttlWkMSCPOZiSTXaQ1sO0LU8tXV4XdLR/UJx6HOfiDU66pAJEEf0sQSOehjz5HFQhFPl9ah1I2xHr91bAyg7VFtSy8bg6HrAJBIPoPurvaZ8Xy/M1QsIPCdvLAVe7S975Cqs1sJGMg5lrsZWWpRUK1IKtH44GjNzp8BQYcUXvHPyoGXkTL+p8r94Q9n3YXgVbaQDnPGBAjrmina4V3QuwCt4iCQDEtG3qCTifIDqBWf0Ov7l90Ez4cQTn4iOlXtXqHSx3gLB3YgkwoggQM8ysHwjr1maCVY1I6U0ks9s9n22OwKWLGF2nM7sjaYiZUTP2s+dWO176FNlu1v2AoColYJnGD8ZMcDNZnS9s3IKgF2Jx128zJiIIA+ho32XrnIUJbVTvJwxO6JBgdSAZ8Q6k4AipZGFXG1YNGPpRbtd9aUmYFy5tWIIBIVRicdI6D4C72lFxrhS26xsPjEPBIUEjO3dM8eUUX1aohPeBsknwmA55IPLNJ2ZxgA8ACqOk1C94jKwZtwJJDblAIABYnxyQSOnpmroZYqLjbL3Ljdzd4UbtxUNxEBoEgDdHlHlFXe1tWty0GZmIAgqCu2AJkH+nAxP9IirWhfTjvLiA25UieNxAIznn5H51WvX0uWtwglg0iV5BA8Q5cww4A93pFUNE3UsyhbuZm9dJEMPBPMZnGZPXa1WNJozfaFkGIBiQcYEeZJH40zXWUDN3byu4jOJHQwc/dUtvVFSSSD0kk+QyAMqaOq2NoJFF2eJCti6lwo/guHAkhQxfoDxzGJzTdQtzZ4icRAz8cfX7/WnM+7DAQeATgTzEnFcv222AzKiPeMmJ8+SOOkYq7LRkkD0l3S6kOO7cMcKFlgoBESTAG6QJA5n40c7O0Nsg3DbIVmw0727tW2wN2TKzmAcjHArN6PUpbUsAxuQNjEAgASDAP3SOg86I2Ne1pVZkFwKZE+8GYRkD3Yz4YPApZ0JO0hN9zC/Ztgd5shgFJacq0kghD6Rj/TngUYuoG2lpLITDGJ85EzH5RWd0fbi/wB73bBgIMHHUCZz/wCBUl7tYum9WVTJAWY4j5cVyo4G8cQqALh8LjJz95/cjnmg3bR8Y/4fzNUP7YuDAuAY+0D+hz9eadqdW10KxXbiOZn14HnUOhUWYp9SyK2Aj3EZdyD8Ky9aYGs5cWJxxU4juYp9IYWw+IyuGrna2kFq69tSSBETzBAPT41UIowIYWJuCFdCx7mMcwZKr1nBYYNXNV2RZhiuqRsKyiCCT4ZTiBEtnglOk5g7BLBfsDP25C9PKjaO3O+xBkCNxBIjBjjBqcaXdd5khhqau5kfYl9LSlWcSTzMg/ADj6fWrTtp2Bm4JJkEFwV4iCBjjpXTdMAh7GepLRM+fXDW/vpxukc3LA8sP5wRPXg1Y9OCbhhnNVUmXtC1AG8SBHhDlfSBAC/LmlUXfMfduafgT4X56/fNKqfo0lfG9p5NbuDJjk1LoRLnyiqBoj2MMsaO3EXyGlMMFIFmOrH8auavTbsjmobi/wBz6SfvNXC9KZDpIImY+VsbKymjKI0J8xVjQaI97bkgjeuPmKu6cCKlXGaocrEVCL9Rz3ufxBbaYG6xORuYgDjk1PfOam1sYj1qqTUAk1cE+R8ranMrdot4R8fyNSaHVXGGxru1TAyec+fIIxny9KWp04uAAkiDOKANuG6CcMQM+pH5UzjorU0OmcaNM01rSi7aud3gWm3bmKqzbsdTAiBxPvLPAnnZjOjgKrXHgllHurBKkyeSRBnA8UZNBOyO8uNlmS3w7+Q6888DHwq/2XcvLeNm05dbikMQviCBpJmPCMLMfDPUhxkKSeIyHAbbmFrt977JO0kFjCgmCPM8Hn0zVDSoTft7QXVjAXPLAqYjIzJnptFWiNRc02+0i20QsqhCAzKgUs7kGSxZfIZI6Go/Zl+7K6i4XXbestMcgOwuSekEjnyIoKAby977yppkuXiSDJkAgsREyQBJ9DzTFuOcMYjzkkdaO63s57Wo1qNuSyjOVYFFwbm1RkZwf/tzkVnyzsItqViSrHBMDiB4ROOBRA1kj0kk1uZ1ELGAw+Zj6U63prpghZk9OcYHyxUeqex3YZWuG4W2spZZAiZ9wCOOvyrt24FW3M5SfM5YeXxpnGoN36CCyOQQB6mOv23Qy/hM8dfn061Hcug5kAwOvUf+Ks6a77h3NBxAaJyR1/fwq12tZthlCqpkfa55AwyhSMzUUh9SPkSpZu1/BggX+SPt8gekdKkXWGI3Y+6rL6VGUeEqSYx4usCZg545pabQWSATcgTyqs5AxB2ggn5VGjaxv8f4neKAaO3z/mV1ufvzqVr0IpHO5vwQ/rQ+0s3NoaRuI6gkCYMcjEUSfSfy+uGPU9QP0oTOFNGE1VGm5gfCiPZlwsCSZzQ3Vamzatm0balysq8OW8XBndtEfDpWguuuDIFByta8RLq8lpQ9YihzUb9nd6J2+nMV06hP6h9RV/s7VWwpl158xSh23EzV1KbW7kHaPZZuPvgZCg5jKqF/Kqt3skIJZR9Zo22ttf1j6iqXaOttssBgTNVVzVCGbJ1DEnf8yPs1VV1mNo8+BAJ6/Cj1q/ZGN1ucYx1iMeu5fqKz2jti4QMlSYJEx9aNDsuyYJBwABDMAAAAAADHAFaHSftNxjpNWk6u8vfxtnnekfXkA/PEU4ayySF3LJMARyT8utVh2Xp9u0piZ95pmNszMzGJ8qmt9n2AQwXIIYHexgg4IBaPT4Y4puo5ckXWWTncPoR68EeopVG3Z2nckkZnMOw+sEeVKuoTrnhtwQYop2fba2drqVLDcJxjOfX/AGpunCPeYvkTgCZY8AVf1e3coC7WURtmcGDP1LfdQytpcHlPlMIXmACE/ZQcAnknoOan7ItC4jMzMvjIUMApgAZg+s0OYt3tvmAmfLgRP1q5uFKZgSNI/wC4t4ypQKhtvWFbWj+yr/hUv9nP/ifcKH2jgVKDSXht/wApH6vD64xO6rRkGC8/SqzWAPtUtW8RVRn9QPjRseJm4JhF6nGw8qCd7QVgk22lpGIBx1oZotICk3QctO3+rnJ8lz++pW2wz1qjqnJGG8RPzgSTH4fOtDAmkebn+cwgOr0A+ItRfAkcxgKMKozHoPl91O7IvMtxbn2SFDJBhoJIHyqlqbezZiCQC3mJIgHyMGolvEXEyY2Ankg85ijuqshr1l1sMBxNTY1m629u3bUBoXLxA8ZUDzjwycTtzE1Q1IuWbL6a5AY3Nxg7hxBB2E9CD5goKBDUtO3cAIEGMcYPWOZqRtQu0gtuaeROc8z5GlRj08Q253mi9o+221w2ibY7wuy+8PdtqnlOVdv9VW9L2M4QbmZQdNcup7p3QPAYBkAgE5zkfE5vT6ruzcVR7x56wOlT9lapzeAD5feCSceLDTxyB9PlUMjaSB9pJYm7g/VWgjkEyQeZAnAPE1b7U/u0I/wlj/mSrfbWjtI03HUloykEjgYBb0rXdnewa6qVGpAVNlsEKCCGti5PvjI27fr8KZxGlN9oJwSVPv8A2mY7L0RezaaSCBPEydxIz8cVJd0hJb+Zu24MZg8xIPrR/wBrOyv4C3Z04vh0B52ABtx3AT4uCAIz0NLsDtaQ2muQwtOW763giVMMMKWhpPiEzOfNZ9QBYGX0niCP7OuWkZOo2ORifGQ4OPQifjmqliyLgPOG6cgiY+4/h0AFafsPWEWbvi3Ie8UuzKGaRiQQZ5HU5HNIa6zY1V0WkV0JU7QdokqQzKcgQU48jQg7b1yOJPhMAbgAaME7o3EcEjI+Yz58z0pXrZiCCpOYOPp0NG9X2g1wsbVraGyTvHEecAMOvzirmjvJAFyyC0MDvJIyUg7QOIn76nUzbuL+4uD8M+m39J5129aIvWgwibafia0fZ2ks2gZQuWjkjETxj1rQ6vsHR3B3z3FSGIVI3hBvIABZSfMiMQOkwRF+wAxUXJAJggLkAwDlevyqcoBUC9viBynIgFGottn/AAvvH6Vf7P09mZFsSPh1oS8jrIzHH5CifZwJ3fKlc+ALt/mKDrsynn8CElRP6BVDtRDZDXYUrIx8cc1aRyKqdvXJsOPh9xFLpiGoCpf9fnYgX+BK2k7XkgbAJI6+fyo3cvsqjbbZ5mQIBHx5meMVh7bkGeBj06itF2pcJtOUdGBzhjuXbHhAPvHM4n7XlWz06BUWzsTXxGEOQltW5G8uWdKqkFdM2OvecYiM89R8utTDT4IGlAwD/eAAmVlfSAz9PsnzqtonW5YZrl62k2wqqAzsxCsYyV2sZUfaGfSn+z1/T/w9steC3E7wMjEhQCTtMBTPEzxkDFHLKATfBqGAYkCuRck7piBGmB6n+YBDEDd9rzx8qVDvZvtO1btstxm98ldsEQQp6kUq5qBqVF1xMjZ7OIklz4gWiBxz58c1JodKrDvGYjAXkRGD9c1cu7FSSwBFuAJ9OKq6W/bCQyliDJAE+UZ46CqAs2I+5EqSCw+I27m4wAPOOvCqJmmLJ2wOgj1kr+lR3bssSJEliB5CeKYJj5D8f9qIRWU+w/tFm01DiYAFOBpi8CnCsYzPkGvPFVrb/n+VT6/MVVSPT6RTnTjymN4SAt+ssgz+/UUM7OQo/esvhQHBEySAoWPr9DRG2f386l1yQBt56eUncAfv+6jqdKx3DbEynfsM+TJkyfOefyplnQAwxzGJ+tXtMARBMncuepOQSfn+NXey7ACf6m5zEMRVMb7FRxGWXezA7dmIeQTPOT8KSdk2x9kfv41oXsjoBS7oEyRVp0zqdngGYn4iaS9noDP4Vo9o4xTDpV5ipkwDq+y1uQ0nGIwPnWy9k795UO1S8MkwQDPdsIjaek/ShjrAECi3sxevd6wQ3FXcu7Yu47u7crjpgmqOfKZy8iEdSNTdaTo7rFZIJcrG5ShiFEypNCtN7MagkHubiBzgBrcHwk53GTgHmcEj0rUBNUWfa13gZeV6elPsaTUgWj30cEYdo8DeY8qXBrb+cQ533gHT+ylwKSAxjAVmtkRsDZGQcVd0vs7qLV0XrYAuOCCS4yG8ZAAG0CR5UVs6bUbritqvd24VBJ3IOIMngCpjo3m1N95YgcMOVY48WcZ+ANV1bS1QbquztcyXJNtYndDMSfCD5RxFRD2c1EqpuchiSFRv6ZEkgmj9nQeG6WuO3JyfO2pFEe6UMkDo34A/lXByBtKkA8zFN7InYW3SQT/QOCR61lNfZNu46HlXZT8jFeu3F/l3fTf+E15V7TiNVfH/AKr/APUa7WW5md9QQaQRB1x44A68iRRLsy6ZzGVBxxQq4avdlNn/AEx9Iq/VknT8THhfcDVHtj+5uR/SfuzVtGqLtBA1tx/lb8DSabMJZTRExi3SYBYnw9fSf/Fa97Nk2rjFMi2NsKMMQfFxxAktOOOprG21yD5gx99abwd2rsRJQAAkwTt8h1rYxgeEp7GamN2LNfqIZ7Duad7VrvLdtR3QRnMk7gQC20cmFPl7xnNUvZvt3urHdG2h7u61wOyFo3ArDdCMzB9PkI0GoXZt7wIwUt4hujxbQQoz1HXk07Q2vGygmATyBGFHiJ+z1+tEZABkHuDLhySh9jC/sx7R3bFzUFXA7xw53ASSd2YIxXazfaB2XWHGBxx1/WlWguFXAb2EVZ2BMC3rggBVxBk05ycgVAriABPH51Juj3j4d3E8xOPvpG6x/eO15/tH2x9wP4/7VIOfp/3U2034fiTinL7w+X/d+tUc/wC6/wAf2iDwyDSBrgp9Y0QuVNaciqwP41PrjkVXH7+tP9MPIftHMX7ZLb/f1q3qoKc+X1AJH3xVFGogjSB8B+A/Wi6dSkR7AaNyGzYO4HpM/Uk0Q7MHg+bf9RqDvB9/50/su5/LHxb/AKjXBNKxjVZl6aRNR7qja6KiTJ4pyvmKhW6K6I5qZM5bMmJ61sfZjQWhfug5AuWYO5uthievnWRVh0ArlrWXFuPDsJZZhj0QqPuMUN1LbCWUgcz1MiyjPIH2Y5PShi6rT2xZYNBxyv8A6bSMjz9awp1DEkkkn1JNRBzC/voaH4BrmW8UTfL2raW47FzEAAQsZAHy90dfvzTLXa+nAtMXzhYk+EFGBMecxn0HrOFLxTUuYX99KhcB9Zxyz0Ye0GmPejfzx/yKPyqDUe1NsbCilo84H2fIkGsCXMnmu23nbM/sGijCsochmqve1dwrdG0eLdgCOVA5k1ke1tR3l67cONzs31M1Oww/76CqGpHib41XJjCjaI9Y5KiRMcfvyq52Z7y+oNUnq12a3jX4H8KH1I2X4mUYYBrl7KkehH3Uq4aUHMj1mJtcj4x+FG1dCtpXthwUBHBgrwSPIUFVcg+TfnRUibVvwliu7A5wTj8/lWvjNYvgzVxKdf2i7OVSjBj1ICgCWnnPOOnAGTXVvXEe4qrLMQDBkKM5JPIgfdUfZ15VBP2plfPIE/Cnhyt5pgbgCcT649Tx86Zaizj2uXXYKfepS11kptHmJ53c5OfjNKrPaTd6Qw8o4jrXKYw5PIIHIvmMDXQYHy/Gou0gCqbBwRuPWTz8sirN8sBBVRLDiZwfjUCupMFARx9rnz5pAt5F+TNAL5m+I+xOfgPz/UVNYPiH/EPw/wB6gR4AwDx5/Tn4/WptK/8AMGBBOB5YFQx3yH2iGRBpu4YBrpNMFdasmZcpa45FQT+/rUmvOaivuF56Afhmn+nHkP2j2BNQqdU/l+dWUuGOfp8AP0oY1xm9B+/1q/acQP3/AEj8vvowBHMfx4wsmVz0/fFP0Nwi2onz/E1Ctz0/eP8AepLJgAdBUnZahBzLe/1mluzxUIc08VSXkwc+dJmc/Cowasd8SApMhZgdBOTXToxAwpW2O9h6r/0mngxUNokXHMmSV/BqkDmQZbXn6Utphfl+FR7zJz+FdVzC9ePwqtn2nbR+fw9fOmKDiPT8K5uM+XH50lJgCpBPeQZMgPVa6owP19D6VEpMmaUGAP3xUWe86pKzHPr+nwqgXJJkjmrInM0M2mT4uOecVOnUNz+JV0VhREs3D0FWOz/fT99DQt2IkgngEHrzFWuz9cAVLk45PM8/Oo6nDaKRuamZk6Y2SgmhmkKHN2xb/wA30pp7YTyb7v1pDwX7QX6fJ2gjubZYyXw3AHrnP51atP4IM+8wxE555+VM3gktOCSQIEiTUneRwT91PKhCFb5NzXQAEGuBG6UbGZSDEAD5DzPlFdWTdVgCRBEgzMcZGBxFde+epmui+vr9wopPmJ7ipIXygdjcbqFBhg2SIIzgj4fH7qVRnU0qlLAq5JAJupTbRg9SP361G3Zi8yfPp+lKlUVLMZ19KehH0pWNOQ4M9fKOkUqVVf8AaYvm/YfgwgDSalSrNmJB/aTbM89B5fOqbCT8B+n6mlSrQwjyTY6YeSNVixgY5/f4fSjXZ+nDW8GAJ6DcTOc+UiuUqPwIwJcXQg/aNSjQL/U33UqVClo8aFR1NOGkXzP3V2lXTp1dEo6mnrpV9a7Srp0k/hl9arraHeEf8P4PSpVdRzKMeJYS0JI+FMSyIX1ifpSpVWhOuO7gSfl+dQi0IX1iaVKuAnXJLdpZOOg/OuADavypUqkATiZLaVSx54H51Ru9nrA2sQcTMRx9f/NdpUVVEGzH+fMG6nSMqszEHAGCfP4VUWlSq+YUF+JGEklr7zopClSpeHk1s4p00qVdOjw1LdXaVdJkLUqVKunT/9k=" class = "card-img-top">

                            <div class = "card-body">
                                <h5 class = "card-title">
                                    <a href = "https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/50ecb1b5-8c18-e111-984a-0dd12f147afa">
                                        SDN Talang
                                    </a>

                                    <br>
                                    Nganjuk, Jawa Timur 64453

                                    <p class = "pt-3">
                                        <strong> 2010 - 2016 </strong>
                                    </p>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class = "col-sm" id = "Card_2">
                        <div class = "card bg-light text-dark border pt-3 px-2 pb-1">
                            <img src = "https://scontent.fsub6-7.fna.fbcdn.net/v/t31.18172-8/272236_442093022502773_957946196_o.jpg?stp=dst-jpg_p720x720&_nc_cat=102&ccb=1-7&_nc_sid=9a8829&_nc_ohc=m3t-iJ6d4xYAX9i2Ll5&_nc_ht=scontent.fsub6-7.fna&oh=00_AfC_d6v067ZEOUkPzOTO28G8WMI-2ZqBit9ozJw3eeuu-A&oe=655C997C" class = "card-img-top">

                            <div class = "card-body">
                                <h5 class = "card-title">
                                    <a href = "https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/20fbbfb9-8c18-e111-8175-e57e9f009e92">
                                        SMPN 1 Rejoso
                                    </a>

                                    <br>
                                    Nganjuk, Jawa Timur 67181

                                    <p class = "pt-3">
                                        <strong> 2016 - 2019 </strong>
                                    </p>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class = "col-sm" id = "Card_3">
                        <div class = "card bg-light text-dark border pt-3 px-2 pb-1">
                            <img src = "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg3B8n03-0iNaOuCruKWjLxNGAvHr1i3jBZd9W06lz7U1fYtzyu7OlWbgeHNW9sQgnazM_vE8SgYODfjSOImLqdVvfEpTaeMWTSS6YPAj4f_OCbj8N7bDRLqCG4kiaz88ZQaExvz5Tjd_Nvcau5ZMp3pgoJf6Wma6XNOcDAFuyJwhCGFKdvIgaO-pSs/s719/IMG_20221123_104257.jpg" class = "card-img-top">

                            <div class = "card-body">
                                <h5 class = "card-title">
                                    <a href = "https://www.sman2nganjuk.sch.id/">
                                        SMAN 2 Nganjuk
                                    </a>

                                    <br>
                                    Nganjuk, Jawa Timur 64417

                                    <p class = "pt-3">
                                        <strong> 2019 - 2022 </strong>
                                    </p>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class = "col-sm" id = "Card_4">
                        <div class = "card bg-light text-dark border pt-3 px-2 pb-1">
                            <img src = "https://1.bp.blogspot.com/-KGRz9j5s28s/WD2-RDp_E1I/AAAAAAAAAbM/SaO1hwi_7xcCYiCM98XOFrOlGXaWntV5ACLcB/s1600/ITS.jpg" class = "card-img-top">

                            <div class = "card-body">
                                <h5 class = "card-title">
                                    <a href = "https://www.its.ac.id/">
                                        Institut Teknologi Sepuluh Nopember
                                    </a>

                                    <br>
                                    Surabaya, Jawa Timur 60111

                                    <p class = "pt-3">
                                        <strong> 2022 - 2026 (Expected) </strong>
                                    </p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section class = "p-5" id = "skills">
            <div class = "container">
                <h1 class = "text-center pb-4"> Skills </h1>

                <div class = "pb-5">
                    <h3> Adobe Photoshop </h3>

                    <div class = "progress" role = "progressbar" aria-label = "Animated striped example" aria-valuenow = "85" aria-valuemin = "0" aria-valuemax = "100">
                        <div class = "progress-bar progress-bar-striped progress-bar-animated" style = "width: 85%"></div>

                        <span class = "progress-text"> 85% </span>
                    </div>
                </div>

                <div class="pb-5">
                    <h3> Adobe Illustrator </h3>

                    <div class = "progress" role = "progressbar" aria-label = "Animated striped example" aria-valuenow = "70" aria-valuemin = "0" aria-valuemax = "100">
                        <div class = "progress-bar progress-bar-striped progress-bar-animated" style = "width: 70%"></div>

                        <span class = "progress-text"> 70% </span>
                    </div>
                </div>

                <div class = "pb-5">
                    <h3> Adobe Premiere Pro </h3>

                    <div class = "progress" role = "progressbar" aria-label = "Animated striped example" aria-valuenow = "70" aria-valuemin = "0" aria-valuemax = "100">
                        <div class = "progress-bar progress-bar-striped progress-bar-animated" style = "width: 70%"></div>

                        <span class = "progress-text"> 70% </span>
                    </div>
                </div>

                <div class = "pb-5">
                    <h3> Adobe After Effect </h3>

                    <div class = "progress" role = "progressbar" aria-label = "Animated striped example" aria-valuenow = "60" aria-valuemin = "0" aria-valuemax = "100">
                        <div class = "progress-bar progress-bar-striped progress-bar-animated" style = "width: 60%"></div>

                        <span class = "progress-text"> 60% </span>
                    </div>
                </div>

                <div class  ="pb-5">
                    <h3> Figma </h3>

                    <div class = "progress" role = "progressbar" aria-label = "Animated striped example" aria-valuenow = "80" aria-valuemin = "0" aria-valuemax = "100">
                        <div class = "progress-bar progress-bar-striped progress-bar-animated" style = "width: 80%"></div>

                        <span class = "progress-text"> 80% </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hobby -->
        <section class = "p-5" id = "hobby">
            <div class = "container">
                <h1 class = "text-center pb-4"> Hobby </h1>

                <div id = "carouselExampleCaptions" class = "carousel slide" data-bs-ride = "carousel">
                    <div class = "carousel-inner">
                        <div class = "carousel-item active carousel-item active white-text">
                            <img src = "{{ asset('img/welcome/hobby1.jpg') }}" class = "d-block w-100" alt = "Badminton">

                            <div class="carousel-caption d-none d-md-block">
                                <h5> Playing Badminton </h5>

                                <p>
                                    Badminton is a racquet sport played using racquets to hit a shuttlecock across a net. Although it may be played with larger teams, the most common forms of the game are "singles" and "doubles".
                                </p>
                            </div>
                        </div>

                        <div class = "carousel-item carousel-item active black-text">
                            <img src = "{{ asset('img/welcome/hobby2.jpg') }}" class = "d-block w-100" alt = "Motorcycle Riding">

                            <div class = "carousel-caption d-none d-md-block">
                                <h5> Motorcycle Riding </h5>

                                <p>
                                    Motorcycle riding is the exhilarating activity of operating a two-wheeled motor vehicle, offering a sense of freedom and adventure as riders navigate roads and experience the thrill of the open air.
                                </p>
                            </div>
                        </div>

                        <div class = "carousel-item carousel-item active white-text">
                            <img src = "{{ asset('img/welcome/hobby3.jpg') }}" class = "d-block w-100" alt = "Listening to Music">

                            <div class = "carousel-caption d-none d-md-block">
                                <h5> Listening to Music </h5>

                                <p>
                                    Listening to music is the enjoyable pastime of engaging with auditory art, where individuals immerse themselves in diverse melodies and lyrics, finding comfort, joy, or inspiration in the harmonious sounds.
                                </p>
                            </div>
                        </div>

                        <div class = "carousel-item carousel-item active black-text">
                            <img src = "{{ asset('img/welcome/hobby4.jpg') }}" class = "d-block w-100" alt = "Travelling">

                            <div class = "carousel-caption d-none d-md-block">
                                <h5> Travelling </h5>

                                <p>
                                    Traveling is the enriching experience of exploring new places and cultures, broadening one's horizons, and creating lasting memories as people journey to destinations near and far.
                                </p>
                            </div>
                        </div>
                    </div>

                    <button class = "carousel-control-prev" type = "button" data-bs-target = "#carouselExampleCaptions" data-bs-slide = "prev">
                        <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>

                        <span class = "visually-hidden"> Previous </span>
                    </button>

                    <button class = "carousel-control-next" type = "button" data-bs-target = "#carouselExampleCaptions" data-bs-slide = "next">
                        <span class = "carousel-control-next-icon" aria-hidden = "true"></span>

                        <span class = "visually-hidden"> Next </span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class = "signup-section" id = "contact">
            <div class = "container px-4 px-lg-5">
                <div class = "row gx-4 gx-lg-5">
                    <div class = "col-md-10 col-lg-8 mx-auto text-center">
                        <i class = "far fa-paper-plane fa-2x mb-2 text-white"></i>

                        <h2 class = "text-white mb-5">
                            Subscribe to receive updates!
                        </h2>

                        <form class = "form-signup" id = "contactForm" data-sb-form-api-token = "API_TOKEN">
                            <div class = "row input-group-newsletter">
                                <div class = "col">
                                    <input class = "form-control" id = "emailAddress" type = "email" placeholder = "Enter email address..." aria-label = "Enter email address..." data-sb-validations = "required,email"/>
                                </div>

                                <div class = "col-auto">
                                    <button class = "btn btn-primary disabled" id = "submitButton" type = "submit">
                                        Notify Me!
                                    </button>
                                </div>
                            </div>

                            <div class = "invalid-feedback mt-2" data-sb-feedback = "emailAddress:required">
                                An email is required.
                            </div>

                            <div class = "invalid-feedback mt-2" data-sb-feedback = "emailAddress:email">
                                Email is not valid.
                            </div>

                            <div class = "d-none" id = "submitSuccessMessage">
                                <div class = "text-center mb-3 mt-2 text-white">
                                    <div class = "fw-bolder">
                                        Form submission successful!
                                    </div>

                                    To activate this form, sign up at
                                    <br>

                                    <a href = "https://portal.its.ac.id/">
                                        https://portal.its.ac.id/
                                    </a>
                                </div>
                            </div>

                            <div class = "d-none" id = "submitErrorMessage">
                                <div class = "text-center text-danger mb-3 mt-2">
                                    Error sending message!
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class = "contact-section bg-black">
            <div class = "container px-4 px-lg-5">
                <div class = "row gx-4 gx-lg-5">
                    <div class = "col-md-4 mb-3 mb-md-0">
                        <div class = "card py-4 h-100">
                            <div class = "card-body text-center">
                                <i class = "fas fa-map-marked-alt text-primary mb-2"></i>

                                <h4 class = "text-uppercase m-0">
                                    Address
                                </h4>

                                <hr class = "my-4 mx-auto"/>

                                <div class = "text-black-50">
                                    Surabaya, Jawa Timur
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "col-md-4 mb-3 mb-md-0">
                        <div class = "card py-4 h-100">
                            <div class = "card-body text-center">
                                <i class = "fas fa-envelope text-primary mb-2"></i>

                                <h4 class = "text-uppercase m-0">
                                    Email
                                </h4>

                                <hr class = "my-4 mx-auto"/>

                                <div class = "text-black-50">
                                    <a href = "mailto:mikbalby@gmail.com!">
                                        mikbalby@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "col-md-4 mb-3 mb-md-0">
                        <div class = "card py-4 h-100">
                            <div class = "card-body text-center">
                                <i class = "fas fa-mobile-alt text-primary mb-2"></i>

                                <h4 class = "text-uppercase m-0">
                                    Phone
                                </h4>

                                <hr class = "my-4 mx-auto"/>

                                <div class = "text-black-50">
                                    +(62) 857-9071-4547
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class = "social d-flex justify-content-center">
                    <a class = "mx-2" href = "https://www.linkedin.com/in/miqbalby">
                        <i class = "fab fa-linkedin"></i>
                    </a>

                    <a class = "mx-2" href = "https://github.com/MIqbalBY">
                        <i class = "fab fa-github"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class = "footer bg-black small text-center text-white-50">
            <div class = "container px-4 px-lg-5">
                Copyright &copy; QB 2023
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src = "{{ asset('js/welcome/scripts.js') }}"></script>
        <script src = "https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
