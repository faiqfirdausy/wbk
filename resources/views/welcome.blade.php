@extends('layouts.appfront', ['title' => 'Home'])

@section('content')
			        <!--
        content section
        ==================================== -->
		<link  rel="icon" href="{{ asset('public/img/logo2.png') }}" >
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">			
				<!-- Wrapper banner -->
				<div class="carousel-inner" role="listbox">
					
					<!-- banner -->
					<div class="item active" style="background-image: url({{ asset('frontend/img/banner2.gif') }});">
						<div class="carousel-caption">
							<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
								<img src="{{ asset('frontend/img/logo2.png') }}" width="65%">
							</div>
									<div class="work-filter fadeInRight animated" data-wow-duration="500ms">
										<ul>
											<li><a href="#features" data-wow-duration="1000ms" class="wow slideInLeft animated">VIDEO</a></li>
											<li><a href="#pimti" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">CAPAIAN ZI</a></li>
											<li><a href="#ipk/ikm" data-wow-duration="1000ms" class="wow slideInRight animated">IPK & IKM</a></li>
										</ul>
									</div>
							<ul class="social-links text-center">
								<li><a href="https://twitter.com/Kemenkumham_Jtm"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
								<li><a href="https://jatim.kemenkumham.go.id/"><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end banner -->
					
				</div>
				<!-- end of content -->
				
			</div>
		</section>
		
        <!--
        End of Banner
        ==================================== -->
				<!--
       PIMTI
        ==================================== -->		
		
		<section id="pimti" class="contact">
			<div class="container">
				
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Progres Capaian</h2>
						<div class="devider"><i class="fa fa-bar-chart fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Progres Pembangunan Zona Integritas</p>
					</div>
					
					<style>
						div.hijau{
							width: 90%; 
							background-color: #4CAF50;
						}
						div.merah{
							width: 20%; 
							background-color: #f44336;
						}
						div.kuning{
							width: 56%; 
							background-color: #EBAF24;
						}
					</style>
					<div class="sec-sub-title wow rubberBand animated" data-wow-duration="1000ms">
						<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="contact-form">
								<form action="#" id="contact-form">
									
								</form>
							</div>
						</div>
						  <table id="example1" class="table table-bordered table-striped">
							<thead>
							 <tr class="header">
								<th>NO</th>
								<th>NAMA UPT</th>
								<th>PROGRES PEMBANGUNAN</th>
								<th>REKOMENDASI</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>1</td>
								<td>Lapas Kelas I Surabaya</td>
								<td>
									<div class="container-bar">
									  <div class="skills-bar merah">20%</div>
									</div>
								</td>
								<td>Harus meningkatkan pengawasan terhadap UPT</td>
							  </tr>
							  <tr>
								<td>2</td>
								<td>Kanim Khusus Kelas I Surabaya</td>
								<td>
									<div class="container-bar">
									  <div class="skills-bar hijau">90%</div>
									</div>
								</td>
								<td>Maju kontestasi tahun depan</td>
							  </tr>
							  <tr>
								<td>3</td>
								<td>Kanim Kelas II Blitar</td>
								<td>
									<div class="container-bar">
									  <div class="skills-bar kuning">56%</div>
									</div>
								</td>
								<td>Terus tingkatkan pengawasan</td>
							  </tr>
							</tbody>
						  </table>
						  
					</div>
			
				</div>
			</div>
			
		</section>



		
        <!--================IPK / IPM==================== -->
		<section id="ipk/ikm" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Indeks Persepsi Korupsi</h2>
						<div class="devider"><i class="fa fa-bar-chart fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Pilih Kategori UPT dan Jangka Waktu Penilaian</p>
					</div>
					
					
					<!-- form -->
					<div class="wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<select class="form-control" id="sel1">
											<option>BAPAS & LAPAS</option>
											<option>RUTAN & RUPBASAN</option>
											<option>KANIM & RUDENIM</option>
											<option>BHP</option>
										</select>
									</div>
									<div class="input-field">
										<select class="form-control" id="sel1">
											<option>TRIWULAN I</option>
											<option>TRIWULAN II</option>
											<option>TRIWULAN III</option>
											<option>TRIWULAN IV</option>
										</select>
										
									</div>
									<div class="input-field">
										<input class="date-own form-control" type="text" placeholder="Pilih Tahun">
									</div>
									<div class="input-field">
										<input type="submit" class="btn btn-success" value="Submit">
										<input class="btn btn-default" type="reset" value="Reset">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<canvas id="bar-chart" width="400" height="150"></canvas>
					</div>
			
				</div>
			</div>
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Indeks Kepuasan Masyarakat</h2>
						<div class="devider"><i class="fa fa-bar-chart fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Pilih Kategori UPT dan Jangka Waktu Penilaian</p>
					</div>
					
					
					<!-- form -->
					<div class="wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<select class="form-control" id="sel1">
											<option>BAPAS & LAPAS</option>
											<option>RUTAN & RUPBASAN</option>
											<option>KANIM & RUDENIM</option>
											<option>BHP</option>
										</select>
									</div>
									<div class="input-field">
										<select class="form-control" id="sel1">
											<option>TRIWULAN I</option>
											<option>TRIWULAN II</option>
											<option>TRIWULAN III</option>
											<option>TRIWULAN IV</option>
										</select>
										
									</div>
									<div class="input-field">
										<input class="date-own form-control" type="text" placeholder="Pilih Tahun">
									</div>
									<div class="input-field">
										<input type="submit" class="btn btn-success" value="Submit">
										<input class="btn btn-default" type="reset" value="Reset">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<canvas id="bar-chart2" width="400" height="150"></canvas>
					</div>
			
				</div>
			</div>
		</section>
		 <!--
        Video
        ==================================== -->
		
		<section id="features" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>VIDEO</h2>
						<div class="devider"><i class="fa fa-spinner fa-spin fa-lg"></i></div>
					</div>
	
				</div>
			</div>
			<div class="project-wrapper">
			
				<figure class="mix work-item branding">
					<img src="{{ asset('frontend/img/works/item-1.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>HARI MERDEKA COVER BY COKELAT (UNOFFICIAL VIDEO BY KEMENKUMHAM JATIM)</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/lDIOqSrRizo" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				
				<figure class="mix work-item web">
					<img src="{{ asset('frontend/img/works/item-2.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Seru! Begini aksi pegawai Kemenkumham Jatim peringati HUT RI</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/2elm7nKN4L8" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="{{ asset('frontend/img/works/item-3.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Tips Lolos Tes Kesamaptaan CASN Kemenkumham 2018</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/iqh3NnoWgxY" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="{{ asset('frontend/img/works/item-4.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Lapas Kelas I Surabaya Goes To WBK/ WBBM</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/adZSQzCmLkk" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
			
				<figure class="mix work-item logo-design">
					<img src="{{ asset('frontend/img/works/item-3.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Tips Lolos Tes Kesamaptaan CASN Kemenkumham 2018</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/iqh3NnoWgxY" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="{{ asset('frontend/img/works/item-4.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Hari Ulang Tahun RI ke 74</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/adZSQzCmLkk" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item branding">
					<img src="{{ asset('frontend/img/works/item-1.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Video HUT RI ke 74</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/lDIOqSrRizo" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				
				<figure class="mix work-item web">
					<img src="{{ asset('frontend/img/works/item-2.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Seru! Begini aksi pegawai Kemenkumham Jatim peringati HUT RI</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/2elm7nKN4L8" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
			</div>
</section>
<!-- Modal video-->
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

@endsection
