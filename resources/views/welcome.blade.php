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
							<img src="{{ asset('frontend/img/logo2.png') }}" width="60%">
									<div class="work-filter fadeInRight animated" data-wow-duration="500ms">
										<ul class="text-center">
											<li><a href="javascript:;" data-wow-duration="1000ms" class="wow slideInLeft animated">BERITA ZI</a></li>
											<li><a href="javascript:;" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">CAPAIAN ZI</a></li>
											<li><a href="javascript:;" data-wow-duration="1000ms" class="wow slideInRight animated">IPK/IKM</a></li>
										</ul>
									</div>
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
