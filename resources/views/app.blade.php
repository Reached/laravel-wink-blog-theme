<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics-id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ config('services.google.analytics-id') }}');
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16" />

    @stack('title')
    @stack('meta_description')
    @stack('opengraph')
    @stack('twitter')

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    {{--<script src="{{ mix('js/app.js') }}" defer></script>--}}

    @stack('stylesheets')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.14.1/build/styles/github.min.css">
</head>
<body>
<div id="app">
    <main>
        @include('includes.navigation')
        @yield('content')
    </main>
</div>

@include('includes.footer')

@stack('scripts')
</body>
</html>
