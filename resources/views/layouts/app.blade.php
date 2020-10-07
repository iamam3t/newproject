<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'dSewa') }}</title>

    <link rel="icon" href="{{ asset('img/logo/favicon.png') }}" type="image/x-icon"/>

    <!-- Scripts -->
    @include('layouts.script')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @include('layouts.stylesheet')
</head>
<body>
    <div id="app">
        @include('website.pages.plugins.menu')

        <main class="py-4">
            @yield('content')
        </main>
        @include('website.pages.plugins.footer')
    </div>
</body>
</html>
