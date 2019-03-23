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
use File;

use Carbon;

class PertanyaanController extends Controller
{
    public function index($id, $idsoal)
    {
        $data['kategori'] = RomawiSoal::with('NomorSoal')->get();
        $data['getkategori_id'] =  NomorSoal::with('AbcSoal', 'RomawiSoal')->findOrFail($id);
        $data['soaljawaban'] = AbcSoal::with('Jawaban', 'DataDukung')->findOrFail($idsoal);
        $data['id_kategori'] = $id;

        $data['transaksi'] = Transaksi::where('created_by', Auth::user()->id)->with('files')->first();
        $data['files'] = !is_null($data['transaksi']) ? array_column($data['transaksi']->files->toArray(), 'id_datadukung') : null;
        $data['file_nama'] = !is_null($data['transaksi']) ? $data['transaksi']->files : null;

        // dd($data['getkategori_id']);
        return view('pertanyaan.index', $data);
    }

    public function buat()
    {
        // dd($data['soaljawaban']);
        return view('pertanyaan.buat');
    }

    public function buatstore(request $request)
    {
        DB::beginTransaction();

            try {
                $fileLaporan = null;
                $time = Carbon\Carbon::now()->format('d-m-Y_H-i-s');
                $transaksi = AbcSoal::findOrFail($request->id);
                $transaksi->petunjuk_teknis = $request->news_content;

              

                $transaksi->save();

                DB::commit();
                return redirect('kategori/buat');

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
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
                $time = Carbon\Carbon::now()->format('d-m-Y_H-i-s');
                $userId = Auth::user()->id;
                $upt = User::with('Upt')->find($userId);
                $nama_upt = $upt->Upt->nama_upt;
                $id_abcsoal = $request->abcsoal;
                $id_kategori = $request->kategori;
                // dd($request->file('upload_files.2'));

                $transaksi = new Transaksi;
                $transaksi->id_abcsoal = $request->abcsoal;
                $transaksi->status = 0;
                $transaksi->created_by = $userId;
                $transaksi->save();

                $numb = intval(intval($request->numb));

                if (count($request->file('upload_files.*')) > 0) {
                    $files = [];
                    for ($i=0; $i < $numb; $i++) {
                        if ($request->hasFile('upload_files.'.$i)) {
                            $fileUpload = null;
                            $nama_datadukung = $request->input('nama_datadukung.'.$i);
                            $id_datadukung = $request->input('id_datadukung.'.$i);
                            File::makeDirectory($nama_upt, $mode = 0777, true, true);
                            $file = $request->file('upload_files.'.$i);
                            $ext = $file->getClientOriginalExtension();
                            $filename = $nama_datadukung.'.'.$ext;
                            $oriName = $file->getClientOriginalName();
                            Storage::disk('local')->putFileAs('file_upload/'.$nama_upt, $file, $filename);
                            $fileUpload = 'file_upload/'.$filename;

                            $files[] = array(
                                'path' => $fileUpload,
                                'ori_nama' => $oriName,
                                'id_transaksi' => $transaksi->id_transaksi,
                                'id_datadukung' => $id_datadukung,
                            );
                        }
                    }

                    DB::table('files')->insert($files);
                }

                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');
                return redirect('kategori/'.$id_kategori.'/'.$id_abcsoal);

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }

    public function update(Request $request)
    {
        // dd("OK");
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
                $time = Carbon\Carbon::now()->format('d-m-Y_H-i-s');
                $userId = Auth::user()->id;
                $upt = User::with('Upt')->find($userId);
                $nama_upt = $upt->Upt->nama_upt;

                $transaksi = Transaksi::findOrFail($request->id_transaksi);
                $transaksi->id_abcsoal = $request->abcsoal;
                $transaksi->status = 0;
                $transaksi->updated_by = $userId;
                $transaksi->save();

                // $files = Transaksi::where('id_transaksi', $request->id_transaksi)->with('files')->first();
                // dd($files);
                // if (isset($request->deleted_file)) {
                //     for ($i=0; $i < count($request->deleted_file); $i++) {
                //         if (in_array($request->input('deleted_file.' .$i), $files)) {
                //             Storage::disk('local')->delete($files[$i]);
                //             ProposalFiles::
                //                 where('id_proposal', $proposalId)
                //                 ->where('path_proposal_file', $files[$i])
                //                 ->delete();
                //         }
                //     }
                // }

                //dd($request->file('upload_files.0'));
                $numb = intval(intval($request->numb));
                $arr = array();

                $ptr=0;
                for ($i=0; $i < $numb; $i++) {
                    $uploadFile = is_null($request->file('upload_files.'.$i));
                    // dd($uploadFile);
                    // dd($request->file('upload_files.0'));
                    if ($uploadFile) {
                        $temp = null;
                    } else {
                        $temp = $request->input('file.'.$ptr);
                        $ptr++;
                    }
                    array_push($arr, $temp);
                    
                }
                // dd($arr);
                if (count($request->file('upload_files.*')) > 0) {
                    $files = [];
                    for ($i=0; $i < $numb; $i++) {
                       // dd($i);
                        if (!is_null($request->file('upload_files.'.$i))) {
                            // dd($request->file('upload_files.'.$i), $i, $arr[$i]);
                            // dd($request->hasFile('upload_files.2'));
                            // dd($request->input('file.2'));
                            if (!is_null($request->file('upload_files.'.$i)) && $arr[$i] != null) {
                                // dd("ok");
                                $oldPath = DataFile::find($arr[$i]);
                                // dd($oldPath);
                                Storage::disk('local')->delete($oldPath->path);
                                DataFile::where('id', $oldPath->id)->delete();
                            }
                           // dd('masuksini');

                            $fileUpload = null;
                            $nama_datadukung = $request->input('nama_datadukung.'.$i);
                            $id_datadukung = $request->input('id_datadukung.'.$i);
                            File::makeDirectory($nama_upt, $mode = 0777, true, true);
                            $file = $request->file('upload_files.'.$i);
                            $ext = $file->getClientOriginalExtension();
                            $filename = $nama_datadukung.'.'.$ext;
                            $oriName = $file->getClientOriginalName();
                            Storage::disk('local')->putFileAs('file_upload/'.$nama_upt, $file, $filename);
                            $fileUpload = 'file_upload/'.$filename;

                            $files[] = array(
                                'path' => $fileUpload,
                                'ori_nama' => $oriName,
                                'id_transaksi' => $transaksi->id_transaksi,
                                'id_datadukung' => $id_datadukung,
                            );
                        }
                        // dd('masuksini');
                    }

                    DB::table('files')->insert($files);
                }

                DB::commit();
                // \Session::flash('success_flash_message','Data Mahasiswa Berhasil Ditambah.');
                return response()->json(['success' => 'done']);

            } catch (Exception $e) {
                return response()->json(['error' => 'silahkan coba lagi']);
                DB::rollback();
            }
    }
}