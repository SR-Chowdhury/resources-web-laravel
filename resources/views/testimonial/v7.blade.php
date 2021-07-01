<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shihanur Rahman Chowdhury">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <link rel="stylesheet" href="{{ asset('public/assets/testimonial/testimonialv7/testimonialv6.css') }}">

    <title>Explore SuperStar World</title>

  </head>
  <body>

    <h1 class="text-success text-center py-5">Basic</h1>

    <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img src="images/img-1.jpg" alt=""></div>
                                <h3 class="title">williamson</h3>
                                <span class="post">Web Developer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img src="images/img-2.jpg" alt=""></div>
                                <h3 class="title">Kristina</h3>
                                <span class="post">Web Designer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img src="images/img-3.jpg" alt=""></div>
                                <h3 class="title">Steve Thomas</h3>
                                <span class="post">Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> --}}
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> --}}

    <script>

        $(document).ready(function(){
            $("#testimonial-slider").owlCarousel({
                items:3,
                itemsDesktop:[1000,3],
                itemsDesktopSmall:[979,2],
                itemsTablet:[768,2],
                itemsMobile:[650,1],
                pagination:true,
                autoPlay:true
            });
        });

    </script>
  </body>
</html>
