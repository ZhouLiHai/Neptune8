<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Neptune8</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="{{ URL::asset('/images/favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 100;
            src: local('Raleway Thin'), local('Raleway-Thin'), url({{ URL::asset("/fonts/raleway.ttf") }}) format('truetype');
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="site-logo">Neptune8</div>
        <div class="side-menu">
            <ul>
                <li><a href="#">博客</a></li>
                <li><a href="#">作品</a></li>
                <li><a href="#">关于</a></li>
                <li><a href="#">登录</a></li>
            </ul>
        </div>
    </div>
    <div class="sub-header">
        <img src="{{ URL::asset("/images/front-page.jpg") }}">
    </div>
    <div class="slogan">
        “她还太年轻，不知道生活并不会免费地赠与，而人自命运中收受的一切，早已在暗中标好了价格。”
    </div>
    <div class="separator"></div>
    <div class="main-content">
        <div class="main-content-col"></div>
        <div class="main-content-col"></div>
    </div>
</div>

</body>
</html>
