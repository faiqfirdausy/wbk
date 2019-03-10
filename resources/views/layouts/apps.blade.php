<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>{{ $title }}</title>

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	@yield('css')
	@stack('css')
</head>

<body class="layout-top-nav skin-red-light">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.header')
		</header>

		<div class="content-wrapper">
			<div class="container">
				@yield('content')
			</div>
		</div>
		
		<footer class="main-footer text-center">
			<b>Copyright &copy; 2019 Kementrian Hukum dan HAM.</b>
		</footer>
	</div>

	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('js/app.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/adminlte.min.js')}}"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.full.min.js"></script> -->

    @yield('scripts')
	@stack('scripts')

</body>
</html>