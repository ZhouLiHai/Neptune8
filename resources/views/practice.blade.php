<!doctype html>
<html lang="{{ config('app.locale') }}">
<head><title>LucyBot</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="/favicon.ico?">
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <style>

        body {
            font: 300 100%/1.25 'Helvetica Neue',Helvetica,'Lantinghei SC','Hiragino Sans GB',sans-serif;
        }

        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 100;
            src: local('Raleway Thin'), local('Raleway-Thin'), url({{ URL::asset("/fonts/raleway.ttf") }}) format('truetype');
        }

        .container {
            display: flex;
            flex-flow: column;
            min-height: 90vh;
        }

        .header {
            width: 100%;
            height:100px;
            z-index:1000;
            background-color: rgba(255,255,255,0.9);
            font-family: 'Raleway', sans-serif;
        }

        .site-logo {
            position: absolute;
            color: #1b6d85;
            left: 50px;
            font-size: 2.8em;
            margin-top: 20px;
        }

        .side-menu {
            position: absolute;
            top: 30px;
            right: 50px;
        }

        .side-menu li{
            display: inline-block;
            margin-left: 15px;
        }

        .side-menu a{
            color: #1b6d85;
            text-decoration: none;
        }

        .sub-header {
            width: calc(100vw - 100px);
            margin-left: auto;
            margin-right: auto;
        }

        .sub-header > img {
            width: inherit;
        }

        .slogan {
            width: calc(100vw - 100px);
            margin: 86px auto;
            text-align: center;
        }

        .separator {
            width: calc(100vw - 100px);
            margin-left: auto;
            margin-right: auto;
            border-bottom: solid 1px;
        }

        .footer {
            flex: 1;
            text-align: center;
            font-family: 'Raleway', sans-serif;
            margin: 20px auto;
            width: calc(100vw - 100px);
            padding-top: 20px;
            border-top: solid 1px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="site-logo">Neptune8</div>
        <div class="side-menu">
            <ul>
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
<div class="footer">
    Developed By ZhouLiHai,Powered By Laravel. © Neptune8 2017. All rights reserved. 鲁ICP备16041720号
</div>

</body>
</html>
