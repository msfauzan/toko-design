<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Design</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
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
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .loader, .loader:after {
        border-radius: 50%;
        width: 10em;
         height: 10em;
    }
    .loader {
        margin: 60px auto;
        font-size: 10px;
        position: relative;
        text-indent: -9999em;
        border-top: 1.1em solid rgba(255, 255, 255, 0.2);
        border-right: 1.1em solid rgba(255, 255, 255, 0.2);
        border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
        border-left: 1.1em solid #ffffff;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation: load8 1.1s infinite linear;
        animation: load8 1.1s infinite linear;
    }
    @-webkit-keyframes load8 {
        0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
        100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        }
    }
    @keyframes load8 {
        0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        }
        100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        }
    }
</style>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

</html>