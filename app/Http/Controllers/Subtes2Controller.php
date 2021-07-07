<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_2;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_2;
use Illuminate\Support\Facades\DB;
use App\Invoice;



class Subtes2Controller extends Controller
{
    public function index(Request $request)
    {
        // $request->session()->forget('soal_1');
        // session(['soal_2' => 'Ini Soal 2']);
        $tes_t2 = Subtes_2::paginate(1);
        return view('user_pages.subtes2.index', ['tes_t2' => $tes_t2]);

    }


    public function sendData(Request $request)
    {
        $kunci=$request->jwbSoal;
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_2s')
                        ->where('sub2_idSoal',$request->id )
                        ->where('sub2_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r1,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r1,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r2,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r2,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r3,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r3,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r4,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r4,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r5,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')->insert(
                        [
                            'sub2_jawabanUser' => $request->r5,
                            'sub2_idUser' => $id_user,
                            'sub2_idSoal' => $request->id,
                            'sub2_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }

            return redirect('/subtes-2?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub2jawaban;
            }
                        
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r1,
                                'sub2_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r1,
                                'sub2_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r2,
                                'sub2_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r2,
                                'sub2_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r3,
                                'sub2_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r3,
                                'sub2_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r4,
                                'sub2_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r4,
                                'sub2_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r5,
                                'sub2_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_2s')
                        ->where('id_sub2jawaban', $idjwb)
                        ->update(
                            [
                                'sub2_jawabanUser' => $request->r5,
                                'sub2_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-2?page='.$request->id);
        }
    }

    public function hint_subtes2(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 2')->get();
        return view ('user_pages.subtes2.hintSubtes2',['data' => $data]);
    }
}
