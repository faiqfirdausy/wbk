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
		<!--month picker-->
		<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/monthpicker.css') }}">

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
				<header id="navigation" class="navbar-fixed-top navbar" >
					<div class="container">
						<div class="navbar-header">
							<!-- responsive nav button -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<i class="fa fa-bars fa-2x"></i>
							</button>
							<!-- /responsive nav button -->
							
							<!-- logo 
							<a class="navbar-brand" href="#body">
								<h1 id="logo">
									<img src="{{ asset('frontend/img/logo.png') }}" alt="Brandi">
								</h1>
							</a>
							<!-- /logo -->
						</div>

						<!-- main navbar-->
						<nav class="collapse navbar-collapse navbar-right" role="navigation">
							<ul id="nav" class="nav navbar-nav">
								<li class="current"><a href=""></a></li>
							</ul>
						</nav>
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
					<div class="col-md-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<p class="copyright text-center">
							Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Kanwil Jatim</a>
						</p>
					</div>
					
				</div>
				<ul class="social-links text-center ">
					<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
					<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
		</footer>
	<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>
	<!-- Essential jQuery Plugins
		================================================== -->
		<!--chart.js-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		
		<script>
			// Bar chart capaian
			new Chart(document.getElementById("bar-chart"), {
				type: 'bar',
				data: {
				  labels: ["Lapas Kelas I Surabaya", "Lapas Kelas IIB Blitar", "Lapas Perempuan Malang", "Lapas Kelas I Malang", "Lapas Kelas IIA Kediri"
				  , "Lapas Kelas I Madiun", "Lapas Kelas IIB Ngawi", "Bapas Kelas II Pamekasan", "Bapas Kelas II Madiun", "Bapas Kelas II Kediri", "Bapas Kelas II Jember", "Bapas Kelas II Malang"
				  , "Bapas Kelas I Surabaya", "Bapas Kelas II Bojonegoro", "LPKA Kelas I Blitar"],
				 datasets: [
					{
					  label: "Nilai Capaian",
					  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"
					  ,"#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
					  data: [27,57,34,74,33,78,67,73,74,43,78,57,74,78,93]
					}
				  ]
				},
				options: {
				  legend: { display: false },
				  title: {
					display: true,
					text: 'Nilai Capaian Pada Tahun 2020'
				  }
				}
			});
		</script>
		<script>
			// Bar chart ipk/ikm
			new Chart(document.getElementById("bar-chart2"), {
				type: 'bar',
				data: {
				  labels: ["Lapas Kelas I Surabaya", "Lapas Kelas IIB Blitar", "Lapas Perempuan Malang", "Lapas Kelas I Malang", "Lapas Kelas IIA Kediri"
				  , "Lapas Kelas I Madiun", "Lapas Kelas IIB Ngawi", "Bapas Kelas II Pamekasan", "Bapas Kelas II Madiun", "Bapas Kelas II Kediri", "Bapas Kelas II Jember", "Bapas Kelas II Malang"
				  , "Bapas Kelas I Surabaya", "Bapas Kelas II Bojonegoro", "LPKA Kelas I Blitar"],
				  datasets: [
					{
					  label: "Nilai Capaian",
					  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"
					  ,"#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
					  data: [78,67,74,84,93,88,22,40,84,33,78,57,74,84,49]
					}
				  ]
				},
				options: {
				  legend: { display: false },
				  title: {
					display: true,
					text: 'Nilai Capaian Pada Tahun 2020'
				  }
				}
			});
		</script>
		<!--month picker-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="{{ asset('js/monthpicker.js')}}"></script>
		<!--Video-->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
		<script src="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js"></script>
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
		
		<!--Video-->
		<script>
			$(document).ready(function() {

			// Gets the video src from the data-src on each button

			var $videoSrc;  
			$('.video-btn').click(function() {
				$videoSrc = $(this).data( "src" );
			});
			console.log($videoSrc);

			  
			  
			// when the modal is opened autoplay it  
			$('#myModal').on('shown.bs.modal', function (e) {
				
			// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
			$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
			})
			  


			// stop playing the youtube video when I close the modal
			$('#myModal').on('hide.bs.modal', function (e) {
				// a poor man's stop video
				$("#video").attr('src',$videoSrc); 
			}) 
				
				


			  
			  
			// document ready  
			});



		</script>
    </body>
</html>
