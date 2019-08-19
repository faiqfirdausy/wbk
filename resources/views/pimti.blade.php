@extends('layouts.appsawalverif', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        Halaman PIMTI
        <small>Sistem Monitoring & Evaluasi Pembangunan Zona Integritas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">PIMTI</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <center><h2 class="box-title">PROGRES PEMBANGUNAN ZONA INTEGRITAS DI UPT</h2></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">

            <div class="tab-content">
                <b>How to use:</b>				
			<div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA UPT</th>
                  <th>PROGRES PEMBANGUNAN</th>
                  <th>REKOMENDASI</th>
                </tr>
                </thead>
                <tbody>
                <tr>
					<td>
						1
					</td>
                  <td>
						Lapas Kelas I Surabaya
				  </td>
                  <td>
						25%
                  </td>
                  <td>
						Tingkatkan Pengawasan
				  </td>
                </tr>
                <tr>
					<td>
						1
					</td>
                  <td>
						Rutan Kelas IIB Nganjuk
				  </td>
                  <td>
						98%
                  </td>
                  <td>
						Maju Kontestasi WBK Tahun Depan
				  </td>
                </tr>
				</tbody>
                <tfoot>
                <tr>
                  <th>NO</th>
                  <th>NAMA UPT</th>
                  <th>PROGRES PEMBANGUNAN</th>
                  <th>REKOMENDASI</th>
                </tr>
                </tfoot>
              </table>
            </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
			

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  
</div>

   

        </section>

    <!-- /.content -->
@endsection
