<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_5;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_5;
use Illuminate\Support\Facades\DB;
use App\Invoice;

class Subtes5Controller extends Controller
{
    public function index(Request $request)
    {
        $tes_t5 = Subtes_5::paginate(1);
        return view('user_pages.subtes5.index', ['tes_t5' => $tes_t5]);

    }


    public function sendData(Request $request)
    {
        $kunci=htmlspecialchars($request->jwbSoal);
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_5s')
                        ->where('sub5_idSoal',$request->id )
                        ->where('sub5_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['jawaban'])) {
                if ($kunci == $request->jawaban) {
                    DB::table('jawaban_subtes_5s')->insert(
                        [
                            'sub5_jawabanUser' => $request->jawaban,
                            'sub5_idUser' => $id_user,
                            'sub5_idSoal' => $request->id,
                            'sub5_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_5s')->insert(
                        [
                            'sub5_jawabanUser' => $request->jawaban,
                            'sub5_idUser' => $id_user,
                            'sub5_idSoal' => $request->id,
                            'sub5_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            

            return redirect('/subtes-5?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub5jawaban;
            }

            if (isset($_POST['jawaban'])) {
                if ($kunci == $request->jawaban) {
                    DB::table('jawaban_subtes_5s')
                        ->where('id_sub5jawaban', $idjwb)
                        ->update(
                            [
                                'sub5_jawabanUser' => $request->jawaban,
                                'sub5_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_5s')
                        ->where('id_sub5jawaban', $idjwb)
                        ->update(
                            [
                                'sub5_jawabanUser' => $request->jawaban,
                                'sub5_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-5?page='.$request->id);
        }
    }

    public function hint_subtes5(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 5')->get();
        return view ('user_pages.subtes5.hintSubtes5',['data' => $data]);
    }
}
