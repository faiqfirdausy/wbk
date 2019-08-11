<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\storage;
use App\User;
use App\Model\Transaksi;
use App\Model\RomawiSoal;
use App\Model\NomorSoal;
use App\Model\AbcSoal;
use App\Model\Jawaban;
use App\Model\Upt;
use App\Model\DataFile;
use App\Model\DataDukung;
use App\Model\File2;


use File;

use Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['session'] = Auth::user();
        return view('home',$data);
    }
	    public function perubahan()
    {
        return view('perubaha3');
    }
            public function pertanyaan2()
    {
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['session'] = Auth::user();

        return view('pertanyaan2.home',$data);
    }
        public function subindikator($id)
    {
        
        $data['session'] = Auth::user();
        
        // $data['transaksi'] = Transaksi::where('created_by', Auth::user()->id)->with('files')->first();
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['romawi'] = RomawiSoal::with('NomorSoal')->findorFail($id);
        $data['getkategori_id'] =  NomorSoal::with('AbcSoal', 'RomawiSoal', 'AbcSoal.myTransaksi')->findOrFail($id);
        $data['user_id'] =  Auth::user()->id;
        $data['id_kategori'] = $id;

        // $data['transaksi'] = Transaksi::where('created_by', Auth::user()->id)->with('filesx')->first();
        // $data['files'] = !is_null($data['transaksi']) ? array_column($data['transaksi']->files->toArray(), 'id_datadukung') : null;
        // $data['file_nama'] = !is_null($data['transaksi']) ? $data['transaksi']->files : null;
        
        return view('perubahan', $data);
    }
        public function downloadFile($id_file)
    {
        $file = DataFile::find($id_file);
        $path = public_path().'/'.$file->path;
        $filename = $file->namafile;
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy($path, $tempImage);

        return response()->download($tempImage, $filename);
    }
      public function store(Request $request)
    {
        // dd($request->file('upload_files'));
        // $rules = array(
        //     'student_nrp_number' => 'required',
        //     'student_name' => 'required|string',
        //     'password' => 'required|string|min:6|confirmed',
        //     'password_confirmation' => 'required',
        // );

        // $messages = [
        //     'required' => 'Kolom ini wajib diisi.',
        //     'string' => 'Kolom ini hanya diisi huruf',
        //     'numeric' => 'Kolom ini hanya diisi angka',
        //     'confirmed' => 'Konfirmasi password ini tidak cocok.',
        //     'min' => [
        //         'string'  => 'Isian ini harus minimal :min karakter.',
        //     ]
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if ($validator->fails()) {
            // return response()->json(['error'=>$validator->errors()]);
        // } else {
            DB::beginTransaction();

            try {
                $time = Carbon\Carbon::now()->format('Y-m-d H:i:s');
                $userId = Auth::user()->id;
                $upt = User::with('Upt')->find($userId);
                $nama_upt = $upt->Upt->nama_upt;
                $id_datadukung = $request->id_datadukung;
                // dd($request->file('upload_files.2'));

                $transaksi = new Transaksi;
                $transaksi->id_abcsoal = $request->id_abcsoal;
                $transaksi->status = 0;
                $transaksi->created_by = $userId;
                $transaksi->created_at = $time;
                $transaksi->save();
                $file = new DataFile;
                $file->id_transaksi = $transaksi->id;
                $file->id_datadukung = $id_datadukung;


                $uploaded = $request->file('upload_files');
                $ext = $uploaded->getClientOriginalExtension();
                $oriname = $uploaded->getClientOriginalName();
                $filename = $id_datadukung.'.'.$ext;
                Storage::disk('local')->putFileAs('file_upload/'.$nama_upt, $uploaded, $filename);
                $fileUpload = 'file_upload/'.$nama_upt.'/'.$filename;
                $file->path = $fileUpload;
                $file->namafile = $filename;
                $kategori = $request->kategori;

                $file->save();

                
                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');
                return redirect('pertanyaan2/kategori/'.$kategori);

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }

}
