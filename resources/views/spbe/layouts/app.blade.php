<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SPBE Kabupaten Tulang Bawang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="keywords" content="Kabupaten Tulang bawang">
    <meta name="description"
        content="SPBE adalah singkatan dari Sistem Pemerintahan Berbasis Elektronik. SPBE merupakan konsep dan upaya pemerintah untuk memberikan layanan publik dengan memanfaatkan teknologi informasi dan komunikasi. SPBE juga dikenal sebagai e-Government.">
    <meta name="author" content="Tim IT Dinas Komunikasi dan Informatika Kab. Tulang Bawang">
    <link rel="shortcut icon" href="{{ asset('spbe_template/images/spbe.svg') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('spbe_template/images/spbe.svg') }}" type="image/x-icon">

    <!-- theme meta -->
    <meta name="theme-name" content="Diskominfo Kab. Tulang Bawang" />

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/font-awesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/font-awesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('spbe_template/plugins/font-awesome/solid.css') }}">

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="{{ asset('spbe_template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('spbe_template/css/efek.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    {{-- Header --}}
    @include('spbe.layouts.header')
    {{-- End Header --}}

    {{-- Modal --}}
    @include('spbe.components.modal')
     @include('spbe.components.modalKebijakan')
          @include('spbe.components.modalLayanan')
    @include('spbe.components.modalKegiatan')
        @include('spbe.components.modalManajemen')



    {{-- Modal End --}}

    @yield('content')

    {{-- Footer --}}
    @include('spbe.layouts.footer')
    {{-- Footer End --}}

    <!-- # JS Plugins -->
    <script src="{{ asset('spbe_template/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('spbe_template/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('spbe_template/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('spbe_template/plugins/scrollmenu/scrollmenu.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('spbe_template/js/script.js') }}"></script>
    <script src="{{ asset('spbe_template/js/custom-script.js') }}"></script>

</body>

</html>
