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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <title>Explore SuperStar World</title>
    <style>
        .carousel-div .owl-carousel .item {
            height: 10rem;
            background: #4DC7A0;
            padding: 1rem;
        }
    </style>
  </head>
  <body>

    <h1 class="text-success text-center py-5">Mousewheel</h1>

    <section class="carousel-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="item"><h4>1</h4></div>
                        <div class="item"><h4>2</h4></div>
                        <div class="item"><h4>3</h4></div>
                        <div class="item"><h4>4</h4></div>
                        <div class="item"><h4>5</h4></div>
                        <div class="item"><h4>6</h4></div>
                        <div class="item"><h4>7</h4></div>
                        <div class="item"><h4>8</h4></div>
                        <div class="item"><h4>9</h4></div>
                        <div class="item"><h4>10</h4></div>
                        <div class="item"><h4>11</h4></div>
                        <div class="item"><h4>12</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                // rtl:true,
                ltr:true,
                loop:true,
                // nav:true,
                margin:10,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    960:{
                        items:5
                    },
                    1200:{
                        items:6
                    }
                }
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY>0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
        });
    </script>
  </body>
</html>
