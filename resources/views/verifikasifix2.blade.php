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
            


            <div class="tab-content">

              <div class="tab-pane active" id="tab_1">


              <!-- /.tab-pane -->
                
				 <!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <table class="table table-hover">

             
                <tr>
                  <th>Upt</th>
                  <td>{{$transaksi->CreatedUser->Upt->nama_upt}}</td>
                </tr>
                <tr>
                  <th>Indikator</th>
                  <td>{{$transaksi->AbcSoal->nama}}</td>
                </tr>
                <tr>
                  <th>Petunjuk Teknis</th>
                  <td>{!! $transaksi->AbcSoal->petunjuk_teknis !!}</td>

                </tr>
                <tr>
                  <th>Data Dukung</th>
                  <td>
                    @foreach($transaksi->AbcSoal->DataDukung as $dakung)
                    <p>{{$dakung->nama}}</p>
                     @php
                      $j = 0;
                      @endphp
                    @foreach($transaksi->filesx as $varfile)
                    @if($dakung->id == $varfile->id_datadukung)
                    <p>{{$varfile->namafile}}</p>
                    <hr>
                    @php
                    $j = 1;
                    @endphp
                    @endif


                    @endforeach
                    @if($j ==0)
                    <p>file kosong</p>
                    <hr>
                    @endif
                    @endforeach
                    
                    
                  </td>


                </tr>
                  

                <tbody>
           
            
					  </table>

					</div>
              <!-- /.tab-pane -->
             
            </div>
                     

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
