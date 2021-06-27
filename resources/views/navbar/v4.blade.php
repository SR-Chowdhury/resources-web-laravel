<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shihanur Rahman Chowdhury">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('public/assets/navbar/navbarv4/nav_icon.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/navbar/navbarv4/navbarv4.css') }}">

    <title>Explore SuperStar World</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target py-4" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-3 ml-auto text-end order-2">
                    <div class="site-logo">
                        <a href="index.html" class="font-weight-bold text-white">Brand</a>
                    </div>
                </div>

                <div class="col-9 order-1 text-start mr-auto">


                    <span class="d-inline-block d-lg-block"><a href="#"
                            class="text-black site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-white"></span></a></span>



                    <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                            <li><a href="about.html" class="nav-link">About</a></li>
                            <li><a href="services.html" class="nav-link">Services</a></li>
                            <li><a href="blog.html" class="nav-link">Blog</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>

    </header>

    <div class="hero" style="background-image: url('{{ asset('public/assets/navbar/navbarv4/hero_3.jpg') }}');"></div>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/assets/navbar/navbarv4/jquery.sticky.js') }}"></script>
    <script src="{{ asset('public/assets/navbar/navbarv4/navbarv4.js') }}"></script>

</body>

</html>
