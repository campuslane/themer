<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- javascript & styles -->
    {{HTML::script('js/jquery/dist/jquery.min.js')}}
    {{Theme::style('theme.css')}}
    {{HTML::style('js/fontawesome/css/font-awesome.min.css')}}

    <title>Main Layout for Default Theme</title>
</head>
<body>
<div class="container">
    <h1>Main Layout : Default Theme</h1>
    <button class="btn btn-info"><span class="fa fa-heart"></span></button>
    
    @yield('main')
</div>
</body>
</html>