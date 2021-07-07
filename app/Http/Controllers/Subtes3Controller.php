<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_3;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_3;
use Illuminate\Support\Facades\DB;
use App\Invoice;

class Subtes3Controller extends Controller
{
    public function index(Request $request)
    {
        // $request->session()->forget('soal_2');
        // session(['soal_3' => 'Ini Soal 3']);
        $tes_t3 = Subtes_3::paginate(1);
        return view('user_pages.subtes3.index', ['tes_t3' => $tes_t3]);

    }


    public function sendData(Request $request)
    {
        $kunci=$request->jwbSoal;
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_3s')
                        ->where('sub3_idSoal',$request->id )
                        ->where('sub3_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r1,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r1,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r2,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r2,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r3,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r3,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r4,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r4,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r5,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')->insert(
                        [
                            'sub3_jawabanUser' => $request->r5,
                            'sub3_idUser' => $id_user,
                            'sub3_idSoal' => $request->id,
                            'sub3_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }

            return redirect('/subtes-3?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub3jawaban;
            }
                        
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r1,
                                'sub3_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r1,
                                'sub3_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r2,
                                'sub3_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r2,
                                'sub3_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r3,
                                'sub3_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r3,
                                'sub3_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r4,
                                'sub3_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r4,
                                'sub3_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r5,
                                'sub3_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_3s')
                        ->where('id_sub3jawaban', $idjwb)
                        ->update(
                            [
                                'sub3_jawabanUser' => $request->r5,
                                'sub3_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-3?page='.$request->id);
        }
    }

    public function hint_subtes3(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 3')->get();
        return view ('user_pages.subtes3.hintSubtes3',['data' => $data]);
    }
}
