<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.png')}}">
		
		<!-- CSS
		============================================ -->

		<!-- Icon Font CSS -->
		<link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('frontend')}}/assets/css/icofont.css">

		<!-- Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/nivo-slider.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-ui.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/percircle.css')}}">

		<!-- Main Style CSS -->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

        @vite('resources/js/frontend/app.js')
        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>