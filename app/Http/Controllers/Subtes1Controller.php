<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_2;
use App\Models\Subtes_1;
use App\Models\JawabanSubtes_1;
use App\Models\hint_subtes;
use Illuminate\Support\Facades\DB;
use App\Invoice;


class Subtes1Controller extends Controller
{
    
    public function index()
    {
        $tes_t1 = Subtes_1::paginate(1);
        return view('user_pages.subtes1.index', ['tes_t1' => $tes_t1]);
    }

    public function sendData(Request $request)
    {
        $kunci=$request->jwbSoal;
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_1s')
                        ->where('sub1_idSoal',$request->id )
                        ->where('sub1_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r1,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r1,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r2,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r2,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r3,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r3,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r4,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r4,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r5,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')->insert(
                        [
                            'sub1_jawabanUser' => $request->r5,
                            'sub1_idUser' => $id_user,
                            'sub1_idSoal' => $request->id,
                            'sub1_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }

            return redirect('/subtes-1?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub1jawaban;
            }
                        
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r1,
                                'sub1_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r1,
                                'sub1_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r2,
                                'sub1_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r2,
                                'sub1_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r3,
                                'sub1_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r3,
                                'sub1_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r4,
                                'sub1_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r4,
                                'sub1_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r5,
                                'sub1_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_1s')
                        ->where('id_sub1jawaban', $idjwb)
                        ->update(
                            [
                                'sub1_jawabanUser' => $request->r5,
                                'sub1_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-1?page='.$request->id);
        }
    }


    public function lanjut(Request $request)
    {
        
        
        $request->session()->forget('soal_1');
        session(['soal_2' => 'Ini Soal 2']);
        $tes_t2 = Subtes_2::paginate(1);
        return view('user_pages.subtes2.index', ['tes_t2' => $tes_t2]);

        // if (session('soal_1')) {
        //     return redirect('/subtes-1');
        // }else {
        //     session(['soal_2' => 'Ini Soal 2']);
        //     return view('user_pages.subtes2.index', ['tes_t2' => $tes_t2]);
            
        // }


    }

    public function hint_subtes1(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 1')->get();
        return view ('user_pages.subtes1.hintSubtes1',['data' => $data]);
    }
    
}




