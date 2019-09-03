@extends('layouts.appsvideo', ['title' => 'Home'])

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
              <h3 class="box-title">Unggah Video</h3>
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
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Video</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Video">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Link Video</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Link Video">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar Cover Video</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">*ukuran dimensi gambar 400x300</p>
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
