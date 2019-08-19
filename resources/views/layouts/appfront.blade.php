<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<!-- Page Title -->
		<title>SIAPZI</title>
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- Twitter Bootstrap css -->
		<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
		<!-- jquery.fancybox  -->
		<link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.css') }}">
		<!-- animate -->
		<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
		<!-- media-queries -->
		<link rel="stylesheet" href="{{ asset('frontend/css/media-queries.css') }}">

		<!-- Modernizer Script for old Browsers -->
		<script src="{{ asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
		
	@yield('css')
	@stack('css')
</head>
    <body id="body">
				<!-- preloader -->
				<div id="preloader">
					<img src="{{ asset('frontend/img/preloader.gif') }}" alt="Preloader">
				</div>
				<!-- end preloader -->

				<!-- 
				Fixed Navigation
				==================================== -->
				<header id="navigation" class="navbar-fixed-top navbar">
					<div class="container">
						<div class="navbar-header">
							<!-- responsive nav button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<i class="fa fa-bars fa-2x"></i>
							</button>
							<!-- /responsive nav button -->
							
							<!-- logo -->
							<a class="navbar-brand" href="#body">
								<h1 id="logo">
									<img src="{{ asset('frontend/img/logo.png') }}" alt="Brandi">
								</h1>
							</a>
							<!-- /logo -->
						</div>

						<!-- main nav -->
						<nav class="collapse navbar-collapse navbar-right" role="navigation">
						@if (Route::has('login'))
							<ul id="nav" class="nav navbar-nav">
								@auth
									<li class="current"><a href="{{ url('/home') }}">Home</a></li>
								@else
									<li><a href="{{ route('login') }}">Login</a></li>

									@if (Route::has('register'))
										<li><a href="{{ route('register') }}">Register</a></li>
									@endif
								@endauth
							</ul>
						@endif
					
						</nav>
						<!-- /main nav -->
						
					</div>
				</header>
				<!--
				End Fixed Navigation
				==================================== -->


		
				@yield('content')
				
		<!--=====Footer=======-->

		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="{{ asset('frontend/img/footer-logo.png') }}" alt="">
							<p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Explore</h6>
							<ul>
								<li><a href="#">Inside Us</a></li>
								<li><a href="#">Flickr</a></li>
								<li><a href="#">Google</a></li>
								<li><a href="#">Forum</a></li>
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6>Support</h6>
							<ul>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Market Blog</a></li>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Pressroom</a></li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Kanwil Jatim</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
	<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>
	<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
		<script src="{{ asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
		<!-- Single Page Nav -->
		<script src="{{ asset('frontend/js/jquery.singlePageNav.min.js')}}"></script>
		<!-- Twitter Bootstrap -->
		<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
		<!-- jquery.fancybox.pack -->
		<script src="{{ asset('frontend/js/jquery.fancybox.pack.js')}}"></script>
		<!-- jquery.mixitup.min -->
		<script src="{{ asset('frontend/js/jquery.mixitup.min.js')}}"></script>
		<!-- jquery.parallax -->
		<script src="{{ asset('frontend/js/jquery.parallax.js')}}"></script>
		<!-- jquery.countTo -->
		<script src="{{ asset('frontend/js/jquery-countTo.js')}}"></script>
		<!-- jquery.appear -->
		<script src="{{ asset('frontend/js/jquery.appear.js')}}"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
		<script src="{{ asset('frontend/js/jquery.easing.min.js')}}"></script>
		<!-- jquery easing -->
		<script src="{{ asset('frontend/js/wow.min.js')}}"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
		<script src="{{ asset('frontend/js/custom.js')}}"></script>
    </body>
</html>
