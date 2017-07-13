<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    @include('layouts.head')
    @include('layouts.title')
<body>
<div id="app">
    @include('article.show')
</div>
</body>

<footer>
@include('layouts.footer')
</footer>
</html>