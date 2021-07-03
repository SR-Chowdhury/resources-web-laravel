<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shihanur Rahman Chowdhury">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="{{ asset('public/assets/animation/animationv2/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/animation/animationv2/css/rotator.css') }}" rel="stylesheet">

    <title>Explore SuperStar World</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        section {
                font-family: 'Open Sans', sans-serif;
                margin: auto;
                max-width:1000px;
                padding: 20px;
                text-align: center;
            }

            hr {
               border-top: 1px  #eee;
                margin: 100px 0;
            }


            .demo1 {
                //text-align: left;
                font-weight: 300;
            }
            .demo2 {
                text-align: center;
                font-weight: 300;
                text-transform: uppercase;
            }
            .demo2 span {
                width: 150px;
                font-weight: 600;
                color: #fff;
                background: #2a6496;
            }
    </style>
</head>

<body>
    
    <h1 class="text-center text-success py-5 ">Animation v2</h1>

    <section>

        <!-- start: DEMO 1  -->
        <div id="rotate-demo1" class="rotate" data-rotate-interval="3000" data-rotate-animate="fadeInDown,fadeOutDown">
            <h1 class="demo1">Welcome to <strong><span class="rotate-arena"></span></strong></h1>
            <ul>
                <li>jQuery Plugin</li>
                <li>Text Rotator</li>
                <li>HT2.PL</li>
            </ul>
        </div>
        <!-- end: DEMO 1  --><hr />

        <!-- start: DEMO 2  -->
        <div id="rotate-demo2" class="rotate" data-rotate-interval="4000" data-rotate-animate="rotateInDownLeft,rollOut">
            <h2 class="demo2">Lorem ipsum <span class="rotate-arena"></span> sit amet.</h2>
            <ul>
                <li>Europe</li>
                <li>Africa</li>
                <li>Poland</li>
                <li>America</li>
            </ul>
        </div>
        <!-- end: DEMO 2  --><hr />


        <!-- start: DEMO 3  -->
        <div id="rotate-demo3" class="rotate" data-rotate-interval="5000" data-rotate-animate="zoomIn,zoomOut">
            <h2 class="rotate-arena"></h2>
            <ul>
                <li>Rotator words and some words of your text</li>
                <li>Awesome <strong class="text-danger">CSS3</strong> animations</li>
                <li>Rotator is <span class="text-danger">lightweight</span> and easy to setup </li>
            </ul>
        </div>
        <!-- end: DEMO 3  --><hr />

    </section>




    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('public/assets/animation/animationv2/js/jquery.rotator.min.js') }}"></script>

    <script>
        jQuery(document).ready(function() {

               jQuery(".rotate").rotator();

        });
    </script>
</body>

</html>
