<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Neptune8</title>

    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                <li><a href="{{ url('/') }}">首页</a></li>
                <li><a href="{{ url('/blog') }}">博客</a></li>
                <li><a href="#">作品</a></li>
                <li><a href="#">关于</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">登录</a></li>
                @else
                    <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit">退出登录</button>
                    </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    @yield('content')
</div>
<div class="footer">
    Developed By ZhouLiHai,Powered By Laravel. © Neptune8 2017. All rights reserved. 鲁ICP备16041720号
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
