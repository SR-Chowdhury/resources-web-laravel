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

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/navbar/navbarv6/navbarv6.css') }}">

    <title>Explore SuperStar World</title>
</head>

<body>

    <div class="page">
        <nav id="colorlib-main-nav" role="navigation">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
            <div class="js-fullheight colorlib-table">
                {{-- <div class="img" style="background-image: url('{{ asset('public/assets/navbar/navbarv5/hero_1.jpg') }}');"></div> --}}
                <div class="img" style="background-color: black;"></div>
                <div class="colorlib-table-cell js-fullheight">
                    <div class="row no-gutters">
                        <div class="col-md-12 text-center">
                            <h1 class="mb-4"><a href="index.html" class="logo">Company Logo</a></h1>
                            <ul>
                                <li class="active"><a href="index.html"><span>Home</span></a></li>
                                <li><a href="about.html"><span>About</span></a></li>
                                <li><a href="blog.html"><span>Blog</span></a></li>
                                <li><a href="contact.html"><span>Contact</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div id="colorlib-page">
            <header>
                <div class="container">
                    <div class="colorlib-navbar-brand">
                        <a class="colorlib-logo" href="index.html">Company Logo</a>
                    </div>
                    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                </div>
            </header>

            <section class="hero-wrap js-fullheight">
                <div class="container px-0">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                        data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate text-center">
                            <div class="desc">
                                <h1>Explore SuperStar World</h1>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/assets/navbar/navbarv6/navbarv6.js') }}"></script>

</body>

</html>
