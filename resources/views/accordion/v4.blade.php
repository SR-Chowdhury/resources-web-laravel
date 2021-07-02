<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shihanur Rahman Chowdhury">

    <link rel="stylesheet" href="{{ asset('public/assets/accordion/accordionv4/css/slidorion.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,700' rel='stylesheet' type='text/css'>

</head>

<body>

    <section style="padding: 20px 0px;">
        <div id="slidorion">

            <div id="slider">
                <div class="slider-image" rel="section1">
                    <img src="{{ asset('public/assets/accordion/accordionv4/img/hot-fuzz.jpg') }}" width="500"
                        height="400" />
                </div>
                <div class="slider-image" rel="section2">
                    <img src="{{ asset('public/assets/accordion/accordionv4/img/the-dark-knight.jpg') }}" width="500"
                        height="400" />
                </div>
                <div class="slider-image" rel="section3">
                    <img src="{{ asset('public/assets/accordion/accordionv4/img/kung-fu-panda.jpg') }}" width="500"
                        height="400" />
                </div>
            </div>

            <div id="accordion">
                <div class="header"><a class="slider-link" rel="section1">Kung Fu Panda 2</a></div>
                <div class="content">
                    <p>In the Valley of Peace, Po Ping is revelling in his fulfilled dreams as he serves as the fabled
                        Dragon Warrior protecting his home with his heroes now his closest friends. However, Po and
                        company learn that the murderous Lord Shen of Gongman City is threatening the land with a
                        fearsome new weapon that could mean the end of kung fu forever.</p>
                    <a href="http://www.imdb.com/title/tt1302011/">Read more</a>
                </div>
                <div class="header"><a class="slider-link" rel="section2">The Dark Knight</a></div>
                <div class="content">
                    <p>Batman raises the stakes in his war on crime. With the help of Lieutenant Jim Gordon and District
                        Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that
                        plague the city streets. But they soon find themselves prey to a reign of chaos unleashed by a
                        rising criminal mastermind known to the terrified citizens of Gotham as The Joker.</p>
                    <a href="http://www.imdb.com/title/tt0468569/">Read more</a>
                </div>
                <div class="header"><a class="slider-link" rel="section3">Hot Fuzz</a></div>
                <div class="content">
                    <p>Top London cop, PC Nicholas Angel is good. Too good. And to stop the rest of his team looking
                        bad, he is reassigned to the quiet town of Sandford. Everything seems quiet for Angel, until two
                        actors are found decapitated. It is called an accident, but Angel isn't going to accept that,
                        especially when more and more people turn up dead.</p>
                    <a href="http://www.imdb.com/title/tt0425112/">Read more</a>
                </div>
            </div>

        </div>
    </section>



    <script src="{{ asset('public/assets/accordion/accordionv4/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/accordion/accordionv4/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('public/assets/accordion/accordionv4/js/jquery.slidorion.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#slidorion').slidorion();
            $('.effects').hide();
            $('.more-effects').click(function (e) {
                $('.effects').slideToggle();
                e.preventDefault();
            });
        });

    </script>

</body>

</html>
