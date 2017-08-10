<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
@yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
