@extends('layouts.appsawal', ['title' => 'Home'])

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
			   <center><p>Pilih Satker Yang Akan Diverifikasi</p></center>
            </div>
            <div class="box-body">
			 <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">KANWIL</a></li>
              <li><a href="#tab_2" data-toggle="tab">PEMASYARAKATAN</a></li>
			   <li><a href="#tab_3" data-toggle="tab">KEIMIGRASIAN</a></li>
			    <li><a href="#tab_4" data-toggle="tab">YANKUMHAM</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
				
			<div class="box-body table-responsive no-padding">
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
                <tr>
					<td>1</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
					<td>2</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
				</tbody>
                <tfoot>
                <tr>
                   <th>NO</th>
                  <th>INDIKATOR</th>
                  <th>JUKNIS</th>
                  <th>DAKUNG</th>
                  <th>STATUS</th>
				  <th>CAPAIAN</th>
                </tr>
                </tfoot>
              </table>
            </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                
				 <!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
					  <table class="table table-hover">
						<tr>
						  <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						</tr>
						<tr>
						  <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						   <td>
							<button class="login100-form-btn">
							Lapas Kelas I Surabaya
							</button>
						  </td>
						</tr>
					  </table>
					</div>
					  </div>
					  <div class="tab-pane" id="tab_3">
						The European languages are members of the same family. Their separate existence is a myth.
						For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
						in their grammar, their pronunciation and their most common words. Everyone realizes why a
						new common language would be desirable: one could refuse to pay expensive translators. To
						achieve this, it would be necessary to have uniform grammar, pronunciation and more common
						words. If several languages coalesce, the grammar of the resulting language is more simple
						and regular than that of the individual languages.
					  </div>
					  <div class="tab-pane" id="tab_4">
						The European languages are members of the same family. Their separate existence is a myth.
						For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
						in their grammar, their pronunciation and their most common words. Everyone realizes why a
						new common language would be desirable: one could refuse to pay expensive translators. To
						achieve this, it would be necessary to have uniform grammar, pronunciation and more common
						words. If several languages coalesce, the grammar of the resulting language is more simple
						and regular than that of the individual languages.
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
