 <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset("assets/media/favicons/favicon.png") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("assets/media/favicons/favicon-192x192.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/media/favicons/apple-touch-icon-180x180.png") }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">
    <!-- END Icons -->

    @yield('css')
    @stack('stack-css')
    @yield('style')
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset("assets/css/oneui.min.css") }}">

  