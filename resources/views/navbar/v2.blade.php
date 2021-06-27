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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('public/assets/navbar/navbarv2/nav_icon.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/navbar/navbarv2/navbarv2.css') }}">
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


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="index.html">Brand<span class="text-primary">.</span> </a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-end" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="#home-section" class="nav-link">Home</a></li>
                            <li class="has-children">
                                <a href="#about-section" class="nav-link">About Us</a>
                                <ul class="dropdown">
                                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                                    <li class="has-children">
                                        <a href="#">More Links</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li><a href="#blog-section" class="nav-link">Blog</a></li>
                            <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                        class="icon-facebook"></span></a>
                            </li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="social"><a href="#contact-section" class="nav-link"><span
                                        class="icon-linkedin"></span></a>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle float-end"><span
                            class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>

    <div class="hero"></div>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/assets/navbar/navbarv2/jquery.sticky.js') }}"></script>
    <script src="{{ asset('public/assets/navbar/navbarv2/navbarv2.js') }}"></script>

</body>

</html>
