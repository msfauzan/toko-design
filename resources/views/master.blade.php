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
    <script src="https://kit.fontawesome.com/8c58057943.js" crossorigin="anonymous"></script>
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
        bottom: 0;
        color: #707070;
        height: 2em;
        left: 0;
        position: fixed; //changed to relative from fixed also works if position is not there
        font-size: small;
        width: 100%;
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
