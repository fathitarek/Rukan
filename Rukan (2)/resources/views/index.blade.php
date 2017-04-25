<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rukan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Place favicon.ico in the root directory -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <main>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(img/slide1.jpg)"></div>
                    <div class="swiper-slide" style="background: url(img/slide2.jpg)"></div>
                    <div class="swiper-slide" style="background: url(img/slide3.jpg)" ></div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <div class="main-content">
                <div class="home-logo">
                    <img class="main-logo" src="img/logo.png">
                </div>
                <div class="container">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                @if(Session::has('flash_message'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                @endif
                <div class="form-container">
                    <p class="txt">
                        Reserve your unit at Rukan and experience the essence of luxury
                        Your new life awaits
                    </p>
                    <form role="form" class="rukan-form" name="rukan-form" method="POST" data-toggle="validator" action="store">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email"  name="email" class="form-control" required id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile" class="form-control" required id="exampleInputPassword1" placeholder="Mobile">
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit"  class="submit btn btn-default">Submit</button>
                    </form>
                    <div class="thanks">
                        <h1>
                            Thank you for your submition
                        </h1>
                        <p>We will contact you Soon</p>
                    </div>
                </div>
            </div>
            <footer>
                <div class="ftr-logos col-md-4"><img src="img/logo1.jpg"></div>
                <div class="ftr-logos col-md-4"><img src="img/logo2.jpg"></div>
                <div class="ftr-logos col-md-4"><img src="img/logo3.jpg"></div>
            </footer>
        </main>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://malsup.github.com/jquery.form.js"></script>
        <!-- Swiper JS -->
        <script src="js/swiper.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
var swiper = new Swiper('.swiper-container', {
    pagination: false,
    autoplay: 4000,
    effect: 'fade'
});
$(document).ready(function () {
    // bind 'myForm' and provide a simple callback function
    $('.rukan-form').ajaxForm(function () {
        $('form').hide();
        $('.thanks').fadeIn();
    });
});

        </script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
