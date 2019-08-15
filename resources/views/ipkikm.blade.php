@extends('layouts.appfront2', ['title' => 'Home'])

@section('content')
	<!-- Header -->
	<header id="header">
		<div class="inner">
			<a href="{{ url('/') }}" class="logo">SIAP<strong>ZI</strong></a>
			<nav id="nav">
				<a href="{{ url('/') }}">Beranda</a>
				<a href="">Berita ZI</a>
				<a href="{{ url('/capaian') }}">Capaian ZI</a>
			</nav>
			<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		</div>
	</header>
	<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Indeks Persepsi Korupsi & Indeks Kepuasan Masyarakat</h2>
					</header>

					<hr class="major" />


								<!-- Form -->
									<h3>Pilih Kategori UPT </h3>

									<form method="post" action="#">
										<div class="row uniform">
											
											<!-- Break -->
											<div class="6u 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">- Kategori -</option>
														<option value="1">LAPAS/BAPAS</option>
														<option value="1">RUTAN/RUPBASAN</option>
														<option value="1">KANIM/RUDENIM</option>
													</select>
												</div>
											</div>
											<div class="6u 12u$(xsmall)">
												<input type="date" name="demo-name" id="demo-name" value="" placeholder="Name" />
											</div>
											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Lihat" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>

									<hr />
									 <!-- BAR CHART -->
									  <div class="box box-success">
										  <h3 class="box-title">Bar Chart</h3>
										  <canvas id="myChart" width="1000" height="400"></canvas>

										<!-- /.box-body -->
									  </div>



						</div>
					</div>

				</div>

			</section>
			
@endsection
