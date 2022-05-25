{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}

<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Aly Cartouche Digitale | ACCEUIL</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href=" {{ asset('assets/images/logo_aly.jpg') }}">
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href=" {{ asset('venobox/venobox.css') }}" />
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/plugin_theme_css.css') }}" />
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href=" {{ asset('style.css') }}" />
	<link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/responsive.css') }}" />
	<!-- modernizr js -->
	<script src=" {{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>

<body>
	@include('partials.header-top-area')


	@include('partials.menu-mobile')

    @include('sweetalert::alert')
    
	@yield('content')

	<!-- witrfm_footer_area -->
	@include('partials.footer-area')

	<!-- Include All JS -->
	<script src=" {{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
	<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src=" {{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script src=" {{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src=" {{ asset('assets/js/jquery.nivo.slider.pack.js') }}"></script>
	<script src=" {{ asset('assets/js/slick.min.js') }}"></script>
	<script src=" {{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src=" {{ asset('venobox/venobox.min.js') }}"></script>
	<script src=" {{ asset('assets/js/jquery.appear.js') }}"></script>
	<script src=" {{ asset('assets/js/jquery.knob.js') }}"></script>
	<script src=" {{ asset('assets/js/BeerSlider.js') }}"></script>
	<script src=" {{ asset('assets/js/theme-pluginjs.js') }}"></script>
	<script src=" {{ asset('assets/js/jquery.meanmenu.js') }}"></script>
	<script src=" {{ asset('assets/js/ajax-mail.js') }}"></script>
	<script src=" {{ asset('assets/js/theme.js') }}"></script>

</body>

</html>
