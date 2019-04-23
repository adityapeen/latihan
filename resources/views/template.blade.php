<!doctype html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container" style="margin: auto;">
            <br/>@include('menu')
            @yield('konten')
        </div>
    </body>
</html>
