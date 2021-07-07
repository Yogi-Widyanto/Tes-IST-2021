<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtes_6;
use App\Models\hint_subtes;
use App\Models\JawabanSubtes_6;
use Illuminate\Support\Facades\DB;
use App\Invoice;

class Subtes6Controller extends Controller
{
    public function index(Request $request)
    {
        $tes_t6 = Subtes_6::paginate(1);
        return view('user_pages.subtes6.index', ['tes_t6' => $tes_t6]);

    }


    public function sendData(Request $request)
    {
        $kunci=htmlspecialchars($request->jwbSoal);
        $id_user=$request->session()->get('idUser');
        $cek = DB::table('jawaban_subtes_6s')
                        ->where('sub6_idSoal',$request->id )
                        ->where('sub6_idUser',$id_user )
                        ->get();
        $cekdata = count($cek);
        if ($cekdata == 0) {
            if (isset($_POST['jawaban'])) {
                if ($kunci == $request->jawaban) {
                    DB::table('jawaban_subtes_6s')->insert(
                        [
                            'sub6_jawabanUser' => $request->jawaban,
                            'sub6_idUser' => $id_user,
                            'sub6_idSoal' => $request->id,
                            'sub6_nilaiJawaban' => 'benar'
                        ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_6s')->insert(
                        [
                            'sub6_jawabanUser' => $request->jawaban,
                            'sub6_idUser' => $id_user,
                            'sub6_idSoal' => $request->id,
                            'sub6_nilaiJawaban' => 'salah'
                        ]
                    );
                }
            }
            

            return redirect('/subtes-6?page='.$request->id);
        }
        else {
            $idjwb='';
            foreach ($cek as $key) {
                $idjwb=$key->id_sub6jawaban;
            }

            if (isset($_POST['jawaban'])) {
                if ($kunci == $request->jawaban) {
                    DB::table('jawaban_subtes_6s')
                        ->where('id_sub6jawaban', $idjwb)
                        ->update(
                            [
                                'sub6_jawabanUser' => $request->jawaban,
                                'sub6_nilaiJawaban' => 'benar'
                            ]
                    );
                }
                else {
                    DB::table('jawaban_subtes_6s')
                        ->where('id_sub6jawaban', $idjwb)
                        ->update(
                            [
                                'sub6_jawabanUser' => $request->jawaban,
                                'sub6_nilaiJawaban' => 'salah'
                            ]
                    );
                }
            }
            return redirect('/subtes-6?page='.$request->id);
        }
    }

    public function hint_subtes6(){
        $data=hint_subtes::where('keterangan_hint','Untuk Subtes 6')->get();
        return view ('user_pages.subtes6.hintSubtes6',['data' => $data]);
    }
}
