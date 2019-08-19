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
							<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
								<img src="{{ asset('frontend/img/logo2.png') }}" width="60%">
							</div>
									<div class="work-filter fadeInRight animated" data-wow-duration="500ms">
										<ul>
											<li><a href="#features" data-wow-duration="1000ms" class="wow slideInLeft animated">VIDEO</a></li>
											<li><a href="{{ url('/capaian') }}" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">CAPAIAN ZI</a></li>
											<li><a href="{{ url('/ipkikm') }}" data-wow-duration="1000ms" class="wow slideInRight animated">IPK/IKM</a></li>
										</ul>
									</div>
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
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
		
		 <!--
        Features
        ==================================== -->
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>VIDEO</h2>
						<div class="devider"><i class="fa fa-newspaper-o fa-lg"></i></div>
					</div>
	
				</div>
			</div>
			<div class="project-wrapper">
			
				<figure class="mix work-item branding">
					<img src="{{ asset('frontend/img/works/item-1.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Video HUT RI ke 74</h4>
						<p>Photography</p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=0" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				
				<figure class="mix work-item web">
					<img src="{{ asset('frontend/img/works/item-2.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/watch?v=2elm7nKN4L8" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="{{ asset('frontend/img/works/item-3.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="{{ asset('frontend/img/works/item-4.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
			
				<figure class="mix work-item branding">
					<img src="{{ asset('frontend/img/works/item-5.jpg') }}" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset('frontend/img/works/item-5.jpg') }}"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item web">
					<img src="{{ asset('frontend/img/works/item-6.jpg') }}" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset('frontend/img/works/item-6.jpg') }}"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="{{ asset('frontend/img/works/item-7.jpg') }}" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset('frontend/img/works/item-7.jpg') }}"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="{{ asset('frontend/img/works/item-8.jpg') }}" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="{{ asset('frontend/img/works/item-8.jpg') }}"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
					</figcaption>
				</figure>
				
			</div>
			
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">

				  
				  <div class="modal-body">

				   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>        
					<!-- 16:9 aspect ratio -->
			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
			</div>
					
					
				  </div>

				</div>
			  </div>
			</div> 
		</section>

@endsection
