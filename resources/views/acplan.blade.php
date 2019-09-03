@extends('layouts.appsactionplan', ['title' => 'Home'])

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
              <h3 class="box-title">Action Plan</h3>
			   <center><p></p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
				 <div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <!-- select -->
                <div class="form-group">
                  <label>Periode</label>
                  <select class="form-control">
                    <option>-</option>
                    <option>Triwulan I</option>
                    <option>Triwulan II</option>
                    <option>Triwulan III</option>
                    <option>Triwulan IV</option>
                  </select>
                </div>
				<!-- Date -->
              <div class="form-group">
                <label>Tahun:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
				  <input class="date-own form-control" type="text" placeholder="Pilih Tahun">
                </div>
                <!-- /.input group -->
              </div>
				<div class="form-group">
                  <label for="exampleInputFile">Unggah berkas</label>
                  <input type="file" id="exampleInputFile">
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


   

        </section>


    <!-- /.content -->
@endsection
