<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_8;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_8;
use Illuminate\Support\Facades\DB;
use App\Invoice;

class Subtes8Controller extends Controller
{
    public function index(Request $request)
    {
        $tes_t8 = Subtes_8::paginate(1);
        return view('user_pages.subtes8.index', ['tes_t8' => $tes_t8]);

    }


    public function sendData(Request $request)
    {
        $kunci=$request->jwbSoal;
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_8s')
                        ->where('sub8_idSoal',$request->id )
                        ->where('sub8_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r1,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r1,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r2,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r2,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r3,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r3,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r4,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r4,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r5,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')->insert(
                        [
                            'sub8_jawabanUser' => $request->r5,
                            'sub8_idUser' => $id_user,
                            'sub8_idSoal' => $request->id,
                            'sub8_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }

            return redirect('/subtes-8?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub8jawaban;
            }
                        
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r1,
                                'sub8_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r1,
                                'sub8_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r2,
                                'sub8_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r2,
                                'sub8_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r3,
                                'sub8_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r3,
                                'sub8_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r4,
                                'sub8_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r4,
                                'sub8_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r5,
                                'sub8_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_8s')
                        ->where('id_sub8jawaban', $idjwb)
                        ->update(
                            [
                                'sub8_jawabanUser' => $request->r5,
                                'sub8_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-8?page='.$request->id);
        }
    }

    public function hint_subtes8(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 8')->get();
        return view ('user_pages.subtes8.hintSubtes8',['data' => $data]);
    }
}
