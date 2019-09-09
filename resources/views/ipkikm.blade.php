@extends('layouts.appsikm', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Input Nilai IPK & IKM</h3>
			   <center><p></p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
					  <!-- Custom Tabs -->
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              <li class="active"><a href="#tab_1" data-toggle="tab">IPK</a></li>
              <li><a href="#tab_2" data-toggle="tab">IKM</a></li>
            </ul>
			<div class="tab-content">

              <div class="tab-pane active" id="tab_1">

		 <form role="form"  method="POST" action="{{ url('ipkikm/update') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}

              <div class="box-body">
                <!-- select -->
                <div class="form-group">
                  <label>Periode</label>
                  <select name="triwulan" class="form-control">
                    <option value="">-</option>
                    <option value="Triwulan I">Triwulan I</option>
                    <option value="Triwulan II">Triwulan II</option>
                    <option value="Triwulan III">Triwulan III</option>
                    <option value="Triwulan IV">Triwulan IV</option>
                  </select>
                </div>
				<!-- Date -->
              <div class="form-group">
                <label>Tahun:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
				  <input name="tahun" class="date-own form-control" type="text" placeholder="Pilih Tahun">
                </div>
                <!-- /.input group -->
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nilai</label>
                  <input type="text" name="nilai" class="form-control" id="exampleInputPassword1" placeholder="Nilai">
                </div>
				 <div class="form-group">
                  <label for="exampleInputFile">Unggah berkas</label>
                  <input type="file" name="upload_files" id="exampleInputFile">
				  <p class="help-block">*berkas maksimal berukuran 50MB</p>
                </div>
				<button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <!-- /.box-body -->
            </form>
                
				 <!-- /.box-header -->
	<div class="box">
	<div class="box-body table-responsive no-padding">
					  <!--table-->

            <div class="box-header">

              <h3 class="box-title">Data Table IPK </h3>

              <h3 class="box-title">Data IPK & IKM</h3>
			  </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>NO</th>
                  <th>PERIODE</th>
                  <th>TAHUN</th>
				  <th>NILAI</th>
                  <th>BERKAS</th>
                  <th>STATUS</th>
                  
                </tr>
                </thead>
                <tbody>

                <tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
				  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>
				  				
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->


	</div>
</div>
              <!-- /.tab-pane -->
             
            </div>
                     
			<div class="tab-pane " id="tab_2">
 <form role="form"  method="POST" action="{{ url('ipkikm/update') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}

              <div class="box-body">
                <!-- select -->
                <div class="form-group">
                  <label>Periode</label>
                  <select name="triwulan" class="form-control">
                    <option value="">-</option>
                    <option value="Triwulan I">Triwulan I</option>
                    <option value="Triwulan II">Triwulan II</option>
                    <option value="Triwulan III">Triwulan III</option>
                    <option value="Triwulan IV">Triwulan IV</option>
                  </select>
                </div>
				<!-- Date -->
              <div class="form-group">
                <label>Tahun:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
				  <input name="tahun" class="date-own form-control" type="text" placeholder="Pilih Tahun">
                </div>
                <!-- /.input group -->
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nilai</label>
                  <input type="text" name="nilai" class="form-control" id="exampleInputPassword1" placeholder="Nilai">
                </div>
				 <div class="form-group">
                  <label for="exampleInputFile">Unggah berkas</label>
                  <input type="file" name="upload_files" id="exampleInputFile">
				  <p class="help-block">*berkas maksimal berukuran 50MB</p>
                </div>
				<button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <!-- /.box-body -->
            </form>
                
				 <!-- /.box-header -->
	<div class="box">
	<div class="box-body table-responsive no-padding">
					  <!--table-->

            <div class="box-header">
              <h3 class="box-title">Data Table IKM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>NO</th>
                  <th>PERIODE</th>
                  <th>TAHUN</th>
				  <th>NILAI</th>
                  <th>BERKAS</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
				  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>
				  				
                </tbody>
   
                @if(!empty($ipkikm))
                @php
                $i = 0;
                @endphp
                @foreach($ipkikm as $data)
                 @php
                $i++
                @endphp
                <tr>                

                  <td>{{$i}}</td>
                  <td>{{$data->triwulan}}</td>
                  <td>{{$data->tahun}}</td>
				          <td>{{$data->nilai}}</td>
                  <td>
                  <a href="{{url('download-ipkikm/'.$data->id)}}">{{$data->namafile}}</a>

                  </td>
                  <td>
                     @if($data->status ==1 )
                    <span class="badge bg-success">Terverifikasi</span>
                    @elseif($data->status ==0 )
                    <span class="badge bg-danger">Belum Terverifikasi</span>
                     @elseif($data->status ==2 )
                    <span class="badge bg-warning">Revisi</span>
                    @endif
                  </td>
                </tr>
                @endforeach
                @endif
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->


	</div>
</div>
              <!-- /.tab-pane -->
             
            </div>


          </div>
		</div>
	

			
            </div>
            
          </div>
		  </div>

   

        </section>


    <!-- /.content -->
@endsection
@section('scripts')
<script type="text/javascript">
  @if(!empty(session('pesan')))
    @if(session('pesan') == 'sukses')
      $( document ).ready(function() {

        Swal.fire(
        'Sukses!',
        'Anda Berhasil Mengupload File',
        'success',
        )
        });
    @elseif(session('pesan') == 'kosong')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'Field Tidak Boleh Kosong',
        'error',
        )
        });
     @elseif(session('pesan') == 'filekosong')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'File Tidak Ditemukan',
        'error',
        )
        });
    @elseif(session('pesan') == 'besar')
        $( document ).ready(function() {

        Swal.fire(
        'Gagal!',
        'File Tidak Boleh Lebih Besar dari 50 MB',
        'error',
        )
        });
    @endif


  @endif
</script>
@endsection