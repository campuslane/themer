<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- javascript & styles -->
    {{HTML::script('js/jquery/dist/jquery.min.js')}}
    {{Theme::style('theme.css')}}
    {{HTML::style('js/fontawesome/css/font-awesome.min.css')}}

    <title>Main Layout for Simple Theme</title>
</head>
<body>
<div class="container">
    <h1>Main Layout : Simple Theme</h1>
    <button class="btn btn-info"><span class="fa fa-heart"></span></button>
    <p>from views!</p>
    @yield('main')
</div>
</body>
</html>