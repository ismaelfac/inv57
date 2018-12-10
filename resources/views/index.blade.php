<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inversiones & Proyectos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./website/images/icons/favicon.png">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="./website/css/bootstrap.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="./website/lib/css/nivo-slider.css"/>
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="./website/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="./website/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="./website/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="./website/css/responsive.css">
    <!-- Template color css -->
    <link href="./website/css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="./website/css/custom.css">

    <!-- Modernizr JS -->
    <script src="website/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                            'csrfToken' => csrf_token(),
                        ]); ?>
    </script>
    @yield('css')
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <div id="app">
            @include('partials.header')
            
            @yield('content')
       
            <!-- Start footer area -->
            @include('partials.footer')
            <!-- End footer area -->
        </div>
    </div>
    
    <!-- Scripts -->
    
    <!-- jquery latest version -->
    <script src="website/js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="website/js/bootstrap.min.js"></script>
    <!-- Nivo slider js -->    
    <script src="website/lib/js/jquery.nivo.slider.js"></script>
    <!-- ajax-mail js -->
    <script src="website/js/ajax-mail.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="website/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="website/js/main.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')

</body>

</html>