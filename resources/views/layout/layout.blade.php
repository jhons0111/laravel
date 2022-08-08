<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    </head>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contactanos</a></li>
            <!-- <li><a href=""></a></li> -->
        </ul>
    </nav>
    <body>
        @yield('content')
    </body>
</html>