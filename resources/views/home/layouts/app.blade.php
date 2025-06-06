<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smartteck</title>

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('home/assets/images/favicon.png') }}" type="image/x-icon" />

    <!-- [Font] Family -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="{{ asset('home/assets/fonts/phosphor/duotone/style.css') }}" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('home/assets/fonts/tabler-icons.min.css') }}" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('home/assets/fonts/feather.css') }}" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/fonts/fontawesome.css') }}" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}" id="main-style-link" />

</head>

<body>

    @include('home.layouts.nav')
    @yield('content')
    @include('home.layouts.footer')

    <!-- Required Js -->
    <script src="{{ asset('home/assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/icon/custom-icon.js') }}"></script>
    <script src="{{ asset('home/assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/component.js') }}"></script>
    <script src="{{ asset('home/assets/js/theme.js') }}"></script>
    <script src="{{ asset('home/assets/js/script.js') }}"></script>

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>


    <script>
        layout_change('false');
    </script>


    <script>
        layout_theme_sidebar_change('dark');
    </script>


    <script>
        change_box_container('false');
    </script>

    <script>
        layout_caption_change('true');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change('preset-1');
    </script>

    <script>
        main_layout_change('vertical');
    </script>

</body>

</html>
