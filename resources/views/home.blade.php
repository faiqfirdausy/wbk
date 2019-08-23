@extends('layouts.appsawal', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        Beranda
        <small>Sistem Monitoring & Evaluasi Pembangunan Zona Integritas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <center><h2 class="box-title">@php print_r($session->upt->nama_upt) @endphp </h2></center>
            </div>
            <div class="box-body">
			
        @foreach($kategori as $data)
			<div class="col-lg-4">
			<a href="{{url('pertanyaan2/kategori/'.$data->id)}}" class="text-black">
                            <button type="button" >
                <div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('img/button.png') }}"  alt="IMG">
				</div>
				</button></a>
				<div class="col-lg-12">
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							{{$data->nama}}
						</button>
					</div>
				</div>
			</div>
		@endforeach
	

		

			

			
            </div>
            
          </div>
		  
			<!-- DONUT CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Progres Capaian @php print_r($session->upt->nama_upt) @endphp</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


   

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
@endsection
