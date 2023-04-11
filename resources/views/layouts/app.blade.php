<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Раффир - материалы для ножей</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        {{-- @vite(['resources/css/app.scss', 'resources/js/app.js']) --}}
        @vite('resources/css/app.scss')
        @vite('resources/js/app.js')
    </head>

    <body class="body" id="app">

        <v-header></v-header>

        {{-- @include('components/overlay') --}}
        {{-- @include('components/common-components/header') --}}
        {{-- @include('components/mobile-menu') --}}
        @yield('content')
        {{-- @include('components/common-components/footer') --}}




        

        <v-footer></v-footer>
    </body>
</html>