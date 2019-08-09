@extends('layouts.appfront', ['title' => 'Home'])

@section('content')
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Selamat Datang di SIAP<strong>ZI</strong></h1>
						<small>Sistem Monitoring & Evaluasi Pembangunan Zona Integritas</small>
					</header>

					<div class="flex ">

						<div>
							<a href="#" class="button icon fa-download">NEWS ZI</a>
						</div>

						<div>
							<a href="#" class="button icon fa-download">CAPAIAN ZI</a>
						</div>

						<div>
							<a href="#" class="button icon fa-download">IPK/IKM</a>
						</div>

					</div>

					<footer>
						
					</footer>
				</div>
			</section>
					<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<div class="image round">
								<img src="{{ asset('front/css/images/pic01.jpg') }}"  alt="IMG">
							</div>
							<header>
								<h3>Lorem ipsum<br /> dolor amet nullam</h3>
							</header>
							<p>Morbi in sem quis dui placerat ornare. Pellentesquenisi<br />euismod in, pharetra a, ultricies in diam sed arcu. Cras<br />consequat  egestas augue vulputate.</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article>
						<article>
							<div class="image round">
								<img src="{{ asset('front/css/images/pic02.jpg') }}"  alt="IMG">
							</div>
							<header>
								<h3>Sed feugiat<br /> tempus adipicsing</h3>
							</header>
							<p>Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis auctor, ultrices ut, elementum vulputate, nunc<br /> blandit ellenste egestagus commodo.</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>
@endsection