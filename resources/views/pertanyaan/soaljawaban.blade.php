<div class="row">
    @php $no =0; @endphp
    @foreach($getkategori_id->AbcSoal as $jawaban) 
        @php 
            ++$no;
            $url =  url('kategori/'.$id_kategori.'/'.$jawaban->id);
        @endphp
        <div class="col-lg-3 col-xs-6">
            <a href="{{ url('kategori/'.$id_kategori.'/'.$jawaban->id) }}" class="small-box-footer">
                <div class="small-box bg-orange ">
                    <div class="inner">
                        <p>PERTANYAAN</p>
                        <h3>{{$no}}</h3>
                        @if ($url == url()->full())
                            <div class="separator"></div>
                        @endif
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $getkategori_id->nama }}</h3>
        <div class="box-tools">
            <a href="#" class="text-muted" data-toggle="tooltip" data-placement="auto bottom" title="{{$getkategori_id->keterangan}}"><i class="fa fa-question"></i></a>
        </div>
    </div>
    @php
        $url = is_null($transaksi) ? "kategori/store" : "kategori/update";
    @endphp
    <form role="form" method="POST" action="{{ url($url) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="box-body">
            <input type="hidden" name="abcsoal" value="{{ $soaljawaban->id }}">
            <input type="hidden" name="kategori" value="{{ $id_kategori }}">
            @if (!is_null($transaksi))
            <input type="hidden" name="id_transaksi" value="{{ $transaksi->id_transaksi }}">
            @endif

            <div>
                <h5><strong>INDIKATOR</strong></h5></strong>
                <p>{{$soaljawaban->nama}}</p>
            </div>
            <div class="mt-25">
                <h5><strong>PETUNJUK TEKNIS</strong></h5>
                <p>{!! $soaljawaban->petunjuk_teknis !!}</p>
            </div>

            <div class="hr">
                <span class="hr-span">
                    <strong>Unggah File Pendukung</strong>
                </span>
            </div>

            <div class="mt-25">
                @php 
                    $numb=0;
                @endphp
                @foreach($soaljawaban->DataDukung as $data)
                    @if (is_null($data->id_divisi) || ($data->id_divisi == Auth::user()->Upt->id_divisi))
                        <div class="wrapperr">
                            @if (!is_null($files))
                                @if (in_array($data->id, $files))
                                    <div class="box-body text-center">
                                        <img width="130" src="{{ asset('img/pdf_icon.png') }}"/>
                                        @foreach ($file_nama as $file)
                                            @if ($file->id_datadukung == $data->id)
                                                <p class="mt-10">{{ $file->ori_nama }}</p>
                                                <input type="text" name="file[]" value="{{ $file->ori_nama }}">
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endif
                            <div class="form-group">
                                <label>{{ $data->nama }}</label>
                                <input type="file" class="form-control" name="upload_files[]">
                                <input type="hidden" name="id_datadukung[]" value="{{ $data->id }}">
                                <input type="hidden" name="nama_datadukung[]" value="{{ $data->nama }}">
                            </div>
                        </div>
                    @endif
                    @php 
                        $numb++;
                    @endphp
                @endforeach
                <input type="hidden" class="form-control" name="numb" value="{{ $numb }}">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-flat btn-primary pull-right">Simpan Data</button>
        </div>
    </form>
</div>