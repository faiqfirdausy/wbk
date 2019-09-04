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
				 <div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
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
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

            <!-- /.box-body -->

			
            </div>
            
          </div>
		  </div>

				<!--table-->
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table IPK & IKM</h3>
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
				<tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
				  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>  
				<tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
				  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>  
				<tr>
                  <td>1</td>
                  <td>Triwulan I</td>
                  <td>2019</td>
				  <td>2019</td>
                  <td>acplan2019.pdf</td>
                </tr>  				
                </tbody>
                <tfoot>
                <tr>
				   <th>NO</th>
                  <th>PERIODE</th>
                  <th>TAHUN</th>
				  <th>NILAI</th>
                  <th>BERKAS</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
   

        </section>


    <!-- /.content -->
@endsection
