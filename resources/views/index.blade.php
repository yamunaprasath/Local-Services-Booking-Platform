<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-touch-icon.png') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">

        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
            rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>
        @if(Route::currentRouteName() !== 'login' && Route::currentRouteName() !== 'register')
        <x-header />
        @endif
        @yield('content')
        @if(Route::currentRouteName() !== 'login' && Route::currentRouteName() !== 'register')
        <x-footer />
        @endif
    </body>

</html>