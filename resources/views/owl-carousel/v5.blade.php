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

    <h1 class="text-success text-center py-5">Merge</h1>

    <section class="carousel-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item" data-merge="1"><h2>1</h2></div>
                        <div class="item" data-merge="2"><h2>2</h2></div>
                        <div class="item" data-merge="1"><h2>3</h2></div>
                        <div class="item" data-merge="3"><h2>4</h2></div>
                        <div class="item" data-merge="6"><h2>6</h2></div>
                        <div class="item" data-merge="2"><h2>7</h2></div>
                        <div class="item" data-merge="1"><h2>8</h2></div>
                        <div class="item" data-merge="3"><h2>9</h2></div>
                        <div class="item"><h2>10</h2></div>
                        <div class="item"><h2>11</h2></div>
                        <div class="item" data-merge="2"><h2>12</h2></div>
                        <div class="item"><h2>13</h2></div>
                        <div class="item"><h2>14</h2></div>
                        <div class="item"><h2>15</h2></div>
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
            $('.owl-carousel').owlCarousel({
                items:5,
                loop:true,
                margin:10,
                merge:true,
                responsive:{
                    678:{
                        mergeFit:true
                    },
                    1000:{
                        mergeFit:false
                    }
                }
            });
        });
    </script>
  </body>
</html>
