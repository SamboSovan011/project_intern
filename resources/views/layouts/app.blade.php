<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="img/potted-pan_logo.jpg">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="https://kit.fontawesome.com/dc09df96e5.js"></script>
</head>

<body>
    @include('layouts.header')
    <main class="py-4">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

</html>
