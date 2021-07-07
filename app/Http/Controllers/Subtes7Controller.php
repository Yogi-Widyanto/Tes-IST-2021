<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_7;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_7;
use Illuminate\Support\Facades\DB;
use App\Invoice;

class Subtes7Controller extends Controller
{
    public function index(Request $request)
    {
        $tes_t7 = Subtes_7::paginate(1);
        return view('user_pages.subtes7.index', ['tes_t7' => $tes_t7]);

    }


    public function sendData(Request $request)
    {
        $kunci=$request->jwbSoal;
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_7s')
                        ->where('sub7_idSoal',$request->id )
                        ->where('sub7_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r1,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r1,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r2,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r2,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r3,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r3,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r4,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r4,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r5,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')->insert(
                        [
                            'sub7_jawabanUser' => $request->r5,
                            'sub7_idUser' => $id_user,
                            'sub7_idSoal' => $request->id,
                            'sub7_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }

            return redirect('/subtes-7?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub7jawaban;
            }
                        
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r1,
                                'sub7_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r1,
                                'sub7_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r2,
                                'sub7_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r2,
                                'sub7_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r3,
                                'sub7_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r3,
                                'sub7_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r4,
                                'sub7_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r4,
                                'sub7_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r5,
                                'sub7_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_7s')
                        ->where('id_sub7jawaban', $idjwb)
                        ->update(
                            [
                                'sub7_jawabanUser' => $request->r5,
                                'sub7_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-7?page='.$request->id);
        }
    }

    public function hint_subtes7(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 7')->get();
        return view ('user_pages.subtes7.hintSubtes7',['data' => $data]);
    }
}
