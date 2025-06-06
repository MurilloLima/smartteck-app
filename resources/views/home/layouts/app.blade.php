<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartteck</title>
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
