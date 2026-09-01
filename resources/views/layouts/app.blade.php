<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">

		<!-- CSRF Token -->
		<meta content="{{ csrf_token() }}" name="csrf-token">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<meta content="" name="description">
		<meta content="" name="keywords">

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<!-- Scripts -->
		@vite(['resources/sass/app.scss', 'resources/js/app.js'])
		@livewireStyles
		@stack('CSS')

		<style>
			/*CODIGO DEL PELOADER*/
			
			#preloader {
				position: fixed;
				inset: 0;
				z-index: 999999;
				overflow: hidden;
				background: var(--background-color);
				transition: all 0.6s ease-out;
			}

			#preloader:before {
				content: "";
				position: fixed;
				top: calc(50% - 30px);
				left: calc(50% - 30px);
				border: 6px solid #ffffff;
				border-color: var(--accent-color) transparent var(--accent-color) transparent;
				border-radius: 50%;
				width: 60px;
				height: 60px;
				animation: animate-preloader 1.5s linear infinite;
			}

			@keyframes animate-preloader {
				0% {
					transform: rotate(0deg);
				}

				100% {
					transform: rotate(360deg);
				}
			}
		</style>
	</head>

	<body>
		@include('layouts.header')

        <main class="main">
			@yield('breadcrumb')
            @yield('content')
        </main>

		@include('layouts.footer')

		@livewireScripts
		@stack('JS')
	</body>

</html>
