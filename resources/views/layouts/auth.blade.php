<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $title ?? '-' }}</title>


    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset("assets/media/favicons/favicon.png") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("assets/media/favicons/favicon-192x192.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/media/favicons/apple-touch-icon-180x180.png") }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset("assets/css/oneui.min.css") }}">

    
  </head>

  <body>
  
   
    <div id="page-container">

      <!-- Main Container -->
     @yield('content')
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="{{ asset("assets/js/oneui.app.min.js") }}"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="{{ asset("assets/js/lib/jquery.min.js") }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset("assets/js/plugins/jquery-validation/jquery.validate.min.js") }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset("assets/js/pages/op_auth_signin.min.js") }}"></script>
  </body>
</html>
