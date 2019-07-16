<!DOCTYPE html>
<html class="antialiased" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@yield('title') &mdash; Joshua Costello</title>

        <link href="https://fonts.googleapis.com/css?family=Assistant:700|Literata:400,400i,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="text-gray-700 text-md sm:text-lg md:text-xl">
        <a class="visually-hidden" href="#content">Skip to Content</a>
        @include('_layouts.shared.header')
        <main id="content">
            @yield('body')
        </main>
    </body>
</html>
