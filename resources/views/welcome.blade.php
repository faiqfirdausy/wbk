@extends('layouts.appfront', ['title' => 'Home'])

@section('content')
			        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">			
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url({{ asset('frontend/img/banner2.gif') }});">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Brandi</span>!</h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
@endsection
