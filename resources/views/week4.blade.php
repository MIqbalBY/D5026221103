<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale = 1"/>

        <title>
            Sistem Informasi ITS - Pemrograman Web (D) Week 4
        </title>

        <link rel = "icon" type = "image/x-icon" href = "{{ asset('img/qb.png') }}"/>

        <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"/>
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity = "sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin = "anonymous"/>

        <script src = "https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class = "jumbotron-fluid text-center bg-info">
            <h3 class = "text-white">
                Hello, how are you?
            </h3>
        </div>

        <div class = "container">
            <div class = "row">
                <div class = "col-6 pt-5">
                    <div class = "row">
                        <div class = "col-12">
                            <h2>
                                Title
                            </h2>

                            <p class = "text-info">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt totam asperiores error obcaecati quae veniam laboriosam nostrum perspiciatis hic natus, voluptate praesentium eos consequuntur fugiat reprehenderit optio blanditiis quis. Illum.
                            </p>
                        </div>
                    </div>

                    <div class = "row">
                        <div class = "col-6">
                            <h3>
                                <i class = "fas fa-cloud"></i>
                            </h3>

                            <h6>
                                Sub Title 1
                            </h6>

                            <p class = "text-muted small">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus cumque saepe atque quod modi aspernatur hic eos? Quam, illo laboriosam similique soluta recusandae impedit quibusdam aperiam expedita dignissimos nobis cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio in nostrum numquam adipisci impedit, aperiam amet explicabo! Necessitatibus placeat laborum nulla tempore magni, modi animi impedit quibusdam repellat odio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab quo similique, earum aliquam eius illum harum pariatur voluptates odio aliquid autem hic debitis! Suscipit repellendus eligendi enim voluptate eaque iure?
                            </p>
                        </div>

                        <div class = "col-6">
                            <h3>
                                <i class = "fas fa-cloud"></i>
                            </h3>

                            <h6>
                                Sub Title 2
                            </h6>

                            <p class = "text-muted small">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores odio in nostrum numquam adipisci impedit, aperiam amet explicabo! Necessitatibus placeat laborum nulla tempore magni, modi animi impedit quibusdam repellat odio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab quo similique, earum aliquam eius illum harum pariatur voluptates odio aliquid autem hic debitis! Suscipit repellendus eligendi enim voluptate eaque iure?
                            </p>
                        </div>

                        <div class = "col-6">
                            <img src = "{{ asset('img/qb.png') }}" alt = "QB" width = "100%" height = "auto" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
