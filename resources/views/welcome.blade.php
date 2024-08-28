<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Robiel Prince Cafe</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <h1>Robiel Prince Cafe</h1>
        <a href="{{ route('home') }}"><button>Home</button></a>
        <a href="{{ route('about') }}"><button>About Us</button></a>
        <a href="{{ route('content') }}"><button>Content</button></a>
    </body>
</html>
