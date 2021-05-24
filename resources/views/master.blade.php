<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap');

    * {
        font-family: 'Karla', sans-serif;
    }

    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 400px !important;
        width: 800px;
        margin: 0 auto;
    }

    .custom-product {
        height: 600px;
    }

    .trending-image {
        height: 200px;
        width: 350px;
        margin-bottom: 20px;
    }

    .trending-item {
        float: left;
        width: 20%;
        margin-right: 30px;
    }

    .row {
        display: flex;
    }

    .column {
        flex: 33.33%;
        padding: 5px;
    }

    .trending-wrapper {
        margin: 60px;
    }

    .detail-img {
        height: 300px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .search-box {
        width: 500px !important;
    }

    .slider-text {
        text-shadow: 4px 4px 2px rgba(150, 150, 150, 1);
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    .loader,
    .loader:after {
        border-radius: 50%;
        width: 10em;
        height: 10em;
    }

    #footer {
        margin-top: 20px;
        position: sticky;
    }

    .zoom {
        /* padding: 0px; */
        /* background-color: green; */
        transition: transform .2s;
        /* Animation */
        width: 800px;
        height: 300px;
        margin: 0 auto;
    }

    .zoom:hover {
        transform: scale(1.5);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    body {
        color: white;
        background-color: black;
    }

    .button:link,
    .button:visited {
        background-color: rgb(18, 189, 41);
        color: white;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
    }

    .button:hover,
    .button:active {
        background-color: rgb(18, 189, 41);
    }

    .dark-theme {
        color: white;
        background-color: black;
    }

    .fade-carousel {
        position: relative;
        height: 100vh;
    }

    .fade-carousel .carousel-inner .item {
        height: 100vh;
    }

    .fade-carousel .carousel-indicators>li {
        margin: 0 2px;
        background-color: #f39c12;
        border-color: #f39c12;
        opacity: .7;
    }

    .fade-carousel .carousel-indicators>li.active {
        width: 10px;
        height: 10px;
        opacity: 1;
    }

    /********************************/
    /*          Hero Headers        */
    /********************************/
    .hero {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 3;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, .75);
        -webkit-transform: translate3d(-50%, -50%, 0);
        -moz-transform: translate3d(-50%, -50%, 0);
        -ms-transform: translate3d(-50%, -50%, 0);
        -o-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);
    }

    .hero h1 {
        font-size: 6em;
        font-weight: bold;
        margin: 0;
        padding: 0;
    }

    .fade-carousel .carousel-inner .item .hero {
        opacity: 0;
        -webkit-transition: 2s all ease-in-out .1s;
        -moz-transition: 2s all ease-in-out .1s;
        -ms-transition: 2s all ease-in-out .1s;
        -o-transition: 2s all ease-in-out .1s;
        transition: 2s all ease-in-out .1s;
    }

    .fade-carousel .carousel-inner .item.active .hero {
        opacity: 1;
        -webkit-transition: 2s all ease-in-out .1s;
        -moz-transition: 2s all ease-in-out .1s;
        -ms-transition: 2s all ease-in-out .1s;
        -o-transition: 2s all ease-in-out .1s;
        transition: 2s all ease-in-out .1s;
    }

    /********************************/
    /*            Overlay           */
    /********************************/
    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
        background-color: #080d15;
        opacity: .7;
    }

    /********************************/
    /*          Custom Buttons      */
    /********************************/
    .btn.btn-lg {
        padding: 10px 40px;
    }

    .btn.btn-hero,
    .btn.btn-hero:hover,
    .btn.btn-hero:focus {
        color: #f5f5f5;
        background-color: #1abc9c;
        border-color: #1abc9c;
        outline: none;
        margin: 20px auto;
    }

    /********************************/
    /*       Slides backgrounds     */
    /********************************/
    .fade-carousel .slides .slide-1,
    .fade-carousel .slides .slide-2,
    .fade-carousel .slides .slide-3 {
        height: 100vh;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .fade-carousel .slides .slide-1 {
        background-image: url(https://ununsplash.imgix.net/photo-1416339134316-0e91dc9ded92?q=75&fm=jpg&s=883a422e10fc4149893984019f63c818);
    }

    .fade-carousel .slides .slide-2 {
        background-image: url(https://ununsplash.imgix.net/photo-1416339684178-3a239570f315?q=75&fm=jpg&s=c39d9a3bf66d6566b9608a9f1f3765af);
    }

    .fade-carousel .slides .slide-3 {
        background-image: url(https://ununsplash.imgix.net/photo-1416339276121-ba1dfa199912?q=75&fm=jpg&s=9bf9f2ef5be5cb5eee5255e7765cb327);
    }

    /********************************/
    /*          Media Queries       */
    /********************************/
    @media screen and (min-width: 980px) {
        .hero {
            width: 980px;
        }
    }

    @media screen and (max-width: 640px) {
        .hero h1 {
            font-size: 4em;
        }
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        padding: 20px;
        margin-top: 20px;
    }

</style>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
    <script>
        var toggle_icon = document.getElementById('theme-toggle');
        var body = document.getElementsByTagName('body')[0];
        var sun_class = 'icon-sun';
        var moon_class = 'icon-moon';
        var dark_theme_class = 'dark-theme';

        toggle_icon.addEventListener('click', function() {
            if (body.classList.contains(dark_theme_class)) {
                toggle_icon.classList.add(moon_class);
                toggle_icon.classList.remove(sun_class);

                body.classList.remove(dark_theme_class);

                setCookie('theme', 'light');
            } else {
                toggle_icon.classList.add(sun_class);
                toggle_icon.classList.remove(moon_class);

                body.classList.add(dark_theme_class);

                setCookie('theme', 'dark');
            }
        });

        function setCookie(name, value) {
            var d = new Date();
            d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

    </script>
</body>

</html>
