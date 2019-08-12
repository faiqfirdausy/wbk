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
    <body class="subpage">
		
		@yield('content')

		
		<footer id="footer">
			<div class="inner">
				<div class="copyright">
					<p>Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur</p>
				</div>
			</div>
		</footer>
		<!-- ChartJS -->
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		<script>
			window.onload = function () {

			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				theme: "light2", // "light1", "light2", "dark1", "dark2"
				title:{
					text: "Top Oil Reserves"
				},
				axisY: {
					title: "Reserves(MMbbl)"
				},
				data: [{        
					type: "column",  
					showInLegend: true, 
					legendMarkerColor: "grey",
					legendText: "MMbbl = one million barrels",
					dataPoints: [      
						{ y: 300878, label: "Venezuela" },
						{ y: 266455,  label: "Saudi" },
						{ y: 169709,  label: "Canada" },
						{ y: 158400,  label: "Iran" },
						{ y: 142503,  label: "Iraq" },
						{ y: 101500, label: "Kuwait" },
						{ y: 97800,  label: "UAE" },
						{ y: 80000,  label: "Russia" }
					]
				}]
			});
			chart.render();

			}
			</script>
	@yield('scripts')
	@stack('scripts')
    </body>
</html>
