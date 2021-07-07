<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subtes_1;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class userLogController extends Controller
{
    // untuk daftar/register akun
    public function daftar (){
        return view ('user_pages.userRegister');
    }

    public function saveData (Request $request){
        $validated = $request->validate([
            'namaLengkap' => 'required|max:120|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|unique:users,email|email:rfc,dns',
            'password' => 'required|min:8|alpha_num',
        ]);

        User::create ([
            'nama_lengkap' => $request->namaLengkap,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login');

    }

    //untuk login
    public function viewLogin (Request $request){
        if ($request->session()->has('petunjuk-pengerjaan')) {
            return redirect('/petunjuk-tes');
        }
        if ($request->session()->has('soal_1')) {
            return redirect('/subtes-1');
        }
        if ($request->session()->has('soal_2')) {
            return redirect('/subtes-2');
        }
        if ($request->session()->has('soal_3')) {
            return redirect('/subtes-3');
        }
        if ($request->session()->has('soal_4')) {
            return redirect('/subtes-4');
        }
        if ($request->session()->has('soal_5')) {
            return redirect('/subtes-5');
        }
        if ($request->session()->has('soal_6')) {
            return redirect('/subtes-6');
        }
        if ($request->session()->has('soal_7')) {
            return redirect('/subtes-7');
        }
        if ($request->session()->has('soal_8')) {
            return redirect('/subtes-8');
        }
        if ($request->session()->has('soal_9')) {
            return redirect('/subtes-9');
        }
        


        return view ('user_pages.userLogin');
    }

    public function cekLogin (Request $request){
        date_default_timezone_set('Asia/Bangkok');
        $cekEmail = DB::table('users')
                    ->where('email', '=', $request->email)
                    ->get();
        $cekTgl =  DB::table('tanggal_tes')->get();
        
        $status='';
        $savePassword='';
        $iduser='';
        $email='';
        $tglmulai='';

        foreach ($cekEmail as $key) {
            $status=$key->keteranganTes;
            $savePassword= $key->password;
            $iduser=$key->id_user;
            $email=$key->email;
        }
        foreach ($cekTgl as $key2) {
            $tglmulai= $key2->tglMulai;
        }

        $strTgl=strtotime($tglmulai);
        $tgl=date('j',$strTgl);
        $bln=date('n',$strTgl);
        $thn=date('Y',$strTgl);
        $konvertTgl=date ("d F Y ", $strTgl);
        // cek hari ini
        $hariIni=date('j');
        $bulanIni=date('n');
        $tahunIni=date('Y');
        

        if ($thn == $tahunIni) {
            if ($bln == $bulanIni) {
                if ($tgl == $hariIni) {
                    if ($status == "Belum Selesai") {
                        if (count($cekEmail)==1) {
                            if (Hash::check($request->password, $savePassword)) {
                                session(['petunjuk-pengerjaan' => 'petunjuk-pengerjaan']);
                                session(['idUser' => $iduser]);
                                session(['email' => $email]);
                                // session(['soal_9' => "soal 9"]);
                                // return redirect('/subtes-9');
                                return redirect('/petunjuk-tes');
                            }else {
                                return redirect('/login')->with('erorPassword','Password Salah');
                            }
                        }else{
                            return redirect('/login')->with('erorEmail','Email Salah');
                        }
                    }else {
                        if (count($cekEmail)==1) {
                            if (Hash::check($request->password, $savePassword)) {
                                session(['idUser' => $iduser]);
                                session(['email' => $email]);
                                return redirect('/selesai');
                            }else {
                                return redirect('/login')->with('erorPassword','Password Salah');
                            }
                        }else{
                            return redirect('/login')->with('erorEmail','Email Salah');
                        }
                    }
                }
                elseif ($hariIni < $tgl) {
                    return redirect('/waktu')->with('eror-1',$konvertTgl);
                }
                else {
                    return redirect('/waktu')->with('eror-2','Tidak Tersedia');
                }
            }
            elseif ($bulanIni < $bln) {
                return redirect('/waktu')->with('eror-1',$konvertTgl);
            }
            else {
                return redirect('/waktu')->with('eror-2','Tidak Tersedia');
            }
        }
        elseif ($tahunIni < $thn) {
            return redirect('/waktu')->with('eror-1',$konvertTgl);
        }
        else {
            return redirect('/waktu')->with('eror-2','Tidak Tersedia');
        }





    }

    public function logout (Request $request){
        $request->session()->flush();
        return redirect('/login');
    }

    public function petunjukTes (Request $request){
        if ($request->session()->has('petunjuk-pengerjaan')) {
            return view('user_pages.hint-tes.index');
        }
        return redirect('/');
    }

    public function selesai (Request $request){
        $tgl = DB::table('tanggal_tes')->get();

        return view ('user_pages.selesai',['tgl' => $tgl]);
    }
    
    public function cetak (Request $request){
        $idUser=$request->session()->get('idUser');
        $s1= DB::table('jawaban_subtes_1s')->where('sub1_idUser', '=',$idUser)->get();
        $s2= DB::table('jawaban_subtes_2s')->where('sub2_idUser', '=',$idUser)->get();
        $s3= DB::table('jawaban_subtes_3s')->where('sub3_idUser', '=',$idUser)->get();
        $s4= DB::table('jawaban_subtes_4s')->where('sub4_idUser', '=',$idUser)->get();
        $s5= DB::table('jawaban_subtes_5s')->where('sub5_idUser', '=',$idUser)->get();
        $s6= DB::table('jawaban_subtes_6s')->where('sub6_idUser', '=',$idUser)->get();
        $s7= DB::table('jawaban_subtes_7s')->where('sub7_idUser', '=',$idUser)->get();
        $s8= DB::table('jawaban_subtes_8s')->where('sub8_idUser', '=',$idUser)->get();
        $s9= DB::table('jawaban_subtes_9s')->where('sub9_idUser', '=',$idUser)->get();

        $jumlah1 = DB::table('subtes_1s')->get();
        $jumlah2 = DB::table('subtes_2s')->get();
        $jumlah3 = DB::table('subtes_3s')->get();
        $jumlah4 = DB::table('subtes_4s')->get();
        $jumlah5 = DB::table('subtes_5s')->get();
        $jumlah6 = DB::table('subtes_6s')->get();
        $jumlah7 = DB::table('subtes_7s')->get();
        $jumlah8 = DB::table('subtes_8s')->get();
        $jumlah9 = DB::table('subtes_9s')->get();
        
        $data = DB::table('users')->where('id_user','=',$idUser)->get();
        



        return view ('user_pages.cetak',[
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            's4' => $s4,
            's5' => $s5,
            's6' => $s6,
            's7' => $s7,
            's8' => $s8,
            's9' => $s9,
            'jumlah1' => $jumlah1,
            'jumlah2' => $jumlah2,
            'jumlah3' => $jumlah3,
            'jumlah4' => $jumlah4,
            'jumlah5' => $jumlah5,
            'jumlah6' => $jumlah6,
            'jumlah7' => $jumlah7,
            'jumlah8' => $jumlah8,
            'jumlah9' => $jumlah9,
            'data' => $data,
            
        ]);
    }
}

