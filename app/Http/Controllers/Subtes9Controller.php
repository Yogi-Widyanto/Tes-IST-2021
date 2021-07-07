<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_9;
use App\Models\User;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_9;
use App\Models\Hafalan_subtes9;
use Illuminate\Support\Facades\DB;
use App\Invoice;

class Subtes9Controller extends Controller
{
    public function index(Request $request)
    {
        $tes_t9 = Subtes_9::paginate(1);
        return view('user_pages.subtes9.index', ['tes_t9' => $tes_t9]);

    }

    public function hafalan(Request $request)
    {
        $kata = Hafalan_subtes9::all();
        return view('user_pages.subtes9.hafalan', ['kata' => $kata]);

    }


    public function sendData(Request $request)
    {
        $kunci=$request->jwbSoal;
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_9s')
                        ->where('sub9_idSoal',$request->id )
                        ->where('sub9_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r1,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r1,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r2,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r2,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r3,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r3,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'salah'
                        ]
                    );
                }

            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r4,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r4,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r5,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')->insert(
                        [
                            'sub9_jawabanUser' => $request->r5,
                            'sub9_idUser' => $id_user,
                            'sub9_idSoal' => $request->id,
                            'sub9_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }

            return redirect('/subtes-9?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub9jawaban;
            }
                        
            if (isset($_POST['r1'])) {
                if ($kunci == $request->r1) {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r1,
                                'sub9_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r1,
                                'sub9_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r2'])) {
                if ($kunci == $request->r2) {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r2,
                                'sub9_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r2,
                                'sub9_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r3'])) {
                if ($kunci == $request->r3) {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r3,
                                'sub9_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r3,
                                'sub9_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            elseif (isset($_POST['r4'])) {
                if ($kunci == $request->r4) {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r4,
                                'sub9_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r4,
                                'sub9_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            else {
                if ($kunci == $request->r5) {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r5,
                                'sub9_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_9s')
                        ->where('id_sub9jawaban', $idjwb)
                        ->update(
                            [
                                'sub9_jawabanUser' => $request->r5,
                                'sub9_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-9?page='.$request->id);
        }
    }

    public function hint_subtes9(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 9')->get();
        return view ('user_pages.subtes9.hintSubtes9',['data' => $data]);
    }

    public function selesai(Request $request)
    {
        $id_user=$request->session()->get('idUser');
        $email=$request->session()->get('email');

        $update_data=DB::table('users')->where('id_user', $id_user)->where('email', $email)->update(['keteranganTes' => 'Selesai']);
        return redirect('/selesai');
        

    }
}
