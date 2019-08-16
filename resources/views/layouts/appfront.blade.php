<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<meta charset="UTF-8">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>SIAPZI</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	@yield('css')
	@stack('css')
</head>
    <body>
		<!-- Header -->
		<header id="header">
			<div class="inner">
					<nav id="nav">
						 @if (Route::has('login'))
							<div class="top-right links">
								@auth
									<a href="{{ url('/home') }}">Home</a>
								@else
									<a href="{{ route('login') }}">Login</a>

									@if (Route::has('register'))
										<a href="{{ route('register') }}">Register</a>
									@endif
								@endauth
							</div>
						@endif
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>


		
				@yield('content')

		
		<footer id="footer">
			<div class="copyright">
				<p>Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur</p>
			</div>
			<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
		</footer>
	
    </body>
</html>
