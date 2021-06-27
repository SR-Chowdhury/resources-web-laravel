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
    <link rel="stylesheet" href="{{ asset('public/assets/navbar/navbarv5/nav_icon.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/navbar/navbarv5/navbarv5.css') }}">

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
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a href="#" class="d-flex align-items-center" style="margin-right: 10px;">
                                <span class="icon-envelope" style="margin-right: 5px;"></span>
                                <span class="d-none d-md-inline-block">info@domain.com</span>
                            </a>
                            <a href="#" class="d-flex align-items-center mr-auto">
                                <span class="icon-phone" style="margin-right: 5px;"></span>
                                <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-end">
                        <div class="mr-auto">
                            <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="index.html">Brand</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-end" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                        class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="#home-section" class="nav-link">Home</a></li>
                                    <li><a href="#classes-section" class="nav-link">Classes</a></li>
                                    <li class="has-children">
                                        <a href="#" class="nav-link">Pages</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="#" class="nav-link">Team</a></li>
                                            <li><a href="#" class="nav-link">Pricing</a></li>
                                            <li><a href="#" class="nav-link">FAQ</a></li>
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
                                    <li><a href="#about-section" class="nav-link">About</a></li>
                                    <li><a href="#events-section" class="nav-link">Events</a></li>
                                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hero" style="background-image: url('{{ asset('public/assets/navbar/navbarv5/hero_1.jpg') }}');"></div>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- Bootstrap Min JS CDN --}}
    <script src="{{ asset('public/assets/navbar/navbarv5/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/assets/navbar/navbarv5/jquery.sticky.js') }}"></script>
    <script src="{{ asset('public/assets/navbar/navbarv5/navbarv5.js') }}"></script>

</body>

</html>
