<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Testimonial Carousel - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/testimonial/testimonialv3/testimonialv3.css') }}">

</head>
<body>
    
    <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 ">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                            </p>
                            <h3 class="title">williamson</h3>
                            <span class="post">Web Developer</span>
                        </div>

                        <div class="testimonial">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                            </p>
                            <h3 class="title">Kristina</h3>
                            <span class="post">Web Designer</span>
                        </div>

                        <div class="testimonial">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est. Sed mattis egestas elementum. Nulla facilisi. Quisque placerat risus ac nunc ornare tincidunt. Sed quis faucibus nunc. Pellentesque accumsan arcu mi, eget venenatis mauris.
                            </p>
                            <h3 class="title">Miranda Joy</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="{{asset('public/assets/testimonial/testimonialv3/testimonialv3.js')}}"></script>
</body>

</html>
