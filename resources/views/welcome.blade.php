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
                            <img src = "data:image/jpeg;base64,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" class = "card-img-top">

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
                            <img src = "data:image/jpeg;base64,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" class = "card-img-top">

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
