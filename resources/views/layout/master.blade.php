<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>Leon ter Maten</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet"  >
    <link href="{{ asset('css/templatemo-first-portfolio-style.css') }}" rel="stylesheet"  >

    <script href="{{ asset('js/jquery.min.js') }}"></script>
    <script href="{{ asset('js/bootstrap.min.js') }}"></script>
    <script href="{{ asset('js/jquery.sticky.js') }}"></script>
    <script href="{{ asset('js/click-scroll.js') }}"></script>
    <script href="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script href="{{ asset('js/magnific-popup-options.js') }}"></script>
    <script href="{{ asset('js/custom.js') }}"></script>

    @stack("styles")
    @stack("style")
</head>
<body id="page-top">
    @include("layout.spinner")
    @include("layout.topnav")
        <div class="col-12">
            @yield("pagecontent")
        </div>
@stack("scripts")
@stack("script")
</body>
</html>
