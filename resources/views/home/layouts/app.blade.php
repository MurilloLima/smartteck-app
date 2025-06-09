<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartteck - @yield('title')</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">

    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('home/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('home/css/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('home/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('home/css/tooplate-gotto-job.css') }}" rel="stylesheet">

    {{-- matas tags icon --}}
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.ico') }}" />
    <link href="{{ asset('home/images/icon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="icon" href="{{ asset('home/images/icon.ico') }}" sizes="any" />
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.ico') }}" rel="icon" />
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.ico') }}" />
    <meta property="og:image" itemprop="image" content="{{ asset('home/images/icon.ico') }}">
    {{-- matas tags wt --}}
    <meta property="og:site_name" content="Smartteck">
    <meta property="og:title" content="">
    {{-- <meta property="og:description" content="Programador Full Stack Senior"> --}}
    <meta property="og:image" itemprop="image" content="{{ asset('home/img/logo/favicon.png') }}">
</head>

<body id="top">

    @include('home.layouts.nav')
    @yield('content')
    @include('home.layouts.footer')

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('home/js/jquery.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/counter.js') }}"></script>
    <script src="{{ asset('home/js/custom.js') }}"></script>
</body>

</html>
