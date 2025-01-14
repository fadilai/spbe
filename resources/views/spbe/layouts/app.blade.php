<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>SPBE Kabupaten Tulang Bawang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <link rel="shortcut icon" href="{{ asset('spbe_template/images/spbe.svg') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('spbe_template/images/spbe.svg') }}" type="image/x-icon">

    <!-- theme meta -->
    <meta name="theme-name" content="wallet" />

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/font-awesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/font-awesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/font-awesome/solid.css') }}">

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="{{ asset('spbe_template/css/style.css') }}">
</head>

<body>

    <!-- Header Start -->
    @include('spbe.layouts.header')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
    @include('spbe.layouts.footer')
    <!-- Footer End -->

    <!-- # JS Plugins -->
    <script src="{{ asset('spbe_template/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('spbe_template/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('spbe_template/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('spbe_template/plugins/scrollmenu/scrollmenu.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('spbe_template/js/script.js') }}"></script>

</body>

</html>
