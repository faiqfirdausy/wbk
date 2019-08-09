@extends('layouts.apps', ['title' => 'Home'])

@section('content')
    <section class="content-header">
      <h1>
          {{ $romawi->nama }}
        <small> @php print_r($session->upt->nama_upt)@endphp</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	    <!-- Main content -->
    <section class="content">
       {{ dd($getkategori_id)}}

      <!-- /.row -->
	   <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <center><h2 class="box-title">  {{ $romawi->nama }}</h2></center>
			   <justify><p>  {{$romawi->keterangan}}</p></justify>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @php
              $i = 0;
              @endphp
              @foreach($romawi->NomorSoal as $data)
              @php
              $i++;
              @endphp
              @if($i==1)
              
              <li class="active"><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>
              @else
              <li ><a href="#tab_{{$data->id}}" data-toggle="tab">{{$data->nama}}</a></li>
              @endif
              @endforeach

            </ul>
            <div class="tab-content">
              @php
              $i = 0;
              @endphp
              @foreach($romawi->NomorSoal as $data)
              @php
              $i++;
              @endphp
              @if($i==1)
              <div class="tab-pane active" id="tab_{{$data->id}}">
              @else  
              <div class="tab-pane " id="tab_{{$data->id}}">
              @endif
                <p></p>

				
			<div class="box-body">
        <p>{{$data->keterangan}}</p>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>INDIKATOR</th>
                  <th>JUKNIS</th>
                  <th>DAKUNG</th>
                  <th>STATUS</th>
				          <th>CAPAIAN</th>
                </tr>
                </thead>
                <tbody>
                @php
                $j = 0;
                @endphp
                @foreach($data->AbcSoal as $abc)
                @php
                $j++;
                @endphp
                <tr>
					         <td>{{$j}}</td>
                  <td>{{$abc->nama}}</td>
                  <td>{!! $abc->petunjuk_teknis !!}
                  </td>


                  <td>@foreach($abc->DataDukung as $dakung)
                    <li>
                    
                    {{$dakung->nama}}

                    </li>


                    <a href="#" class="btn btn-info " role="button" data-toggle="modal" data-target="#myModal{{$dakung->id}}">Upload</a>


                    <hr>
                      <form role="form" method="POST" action="{{ url('perubahan/upload') }}" enctype="multipart/form-data">
                      {!! csrf_field() !!}


                          <div class="modal fade" id="myModal{{$dakung->id}}" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">{{$dakung->nama}}</h4>
                                    </div>
                                    <div class="modal-body">
                                      <label>File</label>
                                        <input type="file" class="form-control" name="upload_files">
                                        <input type="hidden" name="id_datadukung" value="{{ $dakung->id }}">
                                        <input type="hidden" name="id_abcsoal" value="{{ $abc->id }}">

                                        <input type="hidden" name="kategori" value="{{ $romawi->id }}">


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>

                                      </form>
                                    </div>
                                   </div>
          
                              </div>
                          </div>

                     @endforeach
                  </td>
                  <td> <span class="badge bg-success">Terverifikasi</span></td>
                  <td>X</td>
                </tr>
               @endforeach
				</tbody>
              </table>
            </div>
              </div>
              <!-- /.tab-pane -->
              @endforeach

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