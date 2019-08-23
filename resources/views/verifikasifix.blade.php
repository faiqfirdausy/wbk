@extends('layouts.appsawalverif', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        Halaman Verifikasi
        <small>Sistem Monitoring & Evaluasi Pembangunan Zona Integritas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Verifikasi</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <center><h2 class="box-title">HALAMAN VERIFIKASI</h2></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              <li class="active"><a href="#tab_1" data-toggle="tab">Belum Terverifikasi</a></li>
              <li><a href="#tab_2" data-toggle="tab">Revisi</a></li>
              <li><a href="#tab_3" data-toggle="tab">Seluruh</a></li>

 
  
            </ul>


            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">


              <!-- /.tab-pane -->
                
				 <!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <table class="table table-hover">

             
            <thead>
                <tr>
                  <th>NO</th>
                  <th>UPT</th>
                  <th>Indikator</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Capaian</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                @php
                $j = 0;
                @endphp
                @foreach($tnonverif as $data)
                @php
                $j++;
                @endphp
                  <tr>
                  <td>{{$j}}</td>
                  <td>{{$data->CreatedUser->Upt->nama_upt}}</td>
                  <td>{{$data->AbcSoal->nama}}
                  </td>
                  <td><span class="badge bg-success">Belum Terverifikasi</span></td>
                  <td>Belum ada Keterangan</td>
                  <td>0</td>
                  <td><a href="{{url('verifikasi/'.$data->id)}}" class="btn btn-success " role="button" >Detail</a></td>
                </tr>
                @endforeach
                </tbody>
            
					  </table>

					</div>
              <!-- /.tab-pane -->
             
            </div>
                     

  
                     

            <!-- /.tab-content -->
            <!-- /.tab-content -->
            <!-- /.tab-content -->
          </div>
          
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
			

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  


   

        </section>

    <!-- /.content -->
@endsection
