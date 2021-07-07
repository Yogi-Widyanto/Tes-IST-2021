<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_4;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_4;
use Illuminate\Support\Facades\DB;
use App\Invoice;

class Subtes4Controller extends Controller
{
    public function index(Request $request)
    {
        // $request->session()->forget('soal_2');
        // session(['soal_3' => 'Ini Soal 3']);
        $tes_t4 = Subtes_4::paginate(1);
        return view('user_pages.subtes4.index', ['tes_t4' => $tes_t4]);

    }


    public function sendData(Request $request)
    {
        $kunci=htmlspecialchars($request->jwbSoal);
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_4s')
                        ->where('sub4_idSoal',$request->id )
                        ->where('sub4_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['jawaban'])) {
                if ($kunci == $request->jawaban) {
                    DB::table('jawaban_subtes_4s')->insert(
                        [
                            'sub4_jawabanUser' => $request->jawaban,
                            'sub4_idUser' => $id_user,
                            'sub4_idSoal' => $request->id,
                            'sub4_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_4s')->insert(
                        [
                            'sub4_jawabanUser' => $request->jawaban,
                            'sub4_idUser' => $id_user,
                            'sub4_idSoal' => $request->id,
                            'sub4_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            

            return redirect('/subtes-4?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub4jawaban;
            }

            if (isset($_POST['jawaban'])) {
                if ($kunci == $request->jawaban) {
                    DB::table('jawaban_subtes_4s')
                        ->where('id_sub4jawaban', $idjwb)
                        ->update(
                            [
                                'sub4_jawabanUser' => $request->jawaban,
                                'sub4_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_4s')
                        ->where('id_sub4jawaban', $idjwb)
                        ->update(
                            [
                                'sub4_jawabanUser' => $request->jawaban,
                                'sub4_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-4?page='.$request->id);
        }
    }

    public function hint_subtes4(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 4')->get();
        return view ('user_pages.subtes4.hintSubtes4',['data' => $data]);
    }
}
