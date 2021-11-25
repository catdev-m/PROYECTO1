<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="font-sans antialiased">
        <!-- Page Content -->
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <div class="lg:flex w-full h-full">
            @include('layouts.menuModular')
            @yield('contenido')
            </div>
        </div>
    </body>
</html>
