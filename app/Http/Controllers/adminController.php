<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\tanggalTes;
use App\Models\User;
use App\Models\Subtes_1;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{

    // Admin login
    public function viewAdminLogin(){
        return view ('admin_pages.adminLogin');
    }
    public function cekAdminLogin (Request $request){
        $cekEmail = DB::table('admins')
                    ->where('email_admin', '=', $request->email)
                    ->get();
        
        $savePassword='';
        $idAdmin='';
        $emailAdmin='';

        foreach ($cekEmail as $key) {
            $savePassword= $key->password_admin;
            $idAdmin=$key->id_admin;
            $emailAdmin=$key->email_admin;
        }
        if (count($cekEmail)==1) {
            if (Hash::check($request->password, $savePassword)) {
                session(['idAdmin' => $idAdmin]);
                session(['email_admin' => $emailAdmin]);
                return redirect('admin/home');
            }else {
                return redirect('admin/login')->with('erorPassword','Password Salah');
            }
        }else{
            return redirect('admin/login')->with('erorEmail','Email Salah');
        }

    }

    public function home(){
        return view ('admin_pages.index');
    }

    public function logout (Request $request){
        $request->session()->flush();
        return redirect('/');
    }


    public function dataPeserta(Request $request){
        $dataPeserta=User::paginate(5);
        return view ('admin_pages.data-peserta',['dataPeserta' => $dataPeserta]);
    }
    
    public function editData($id){
        $data=DB::table('users')->where('id_user',$id)->get();
        return view('admin_pages.edit_dataPeserta',['data' => $data]);
        
    }

    public function updateData(Request $request){
        DB::table('users')->where('id_user',$request->id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'keteranganTes' => $request->ket
        ]);
        return redirect('/admin/data-peserta');
    }

    public function hapusData($id){
        DB::table('users')->where('id_user',$id)->delete();
        return redirect('/admin/data-peserta');
        
    }


    //data soal
    public function dataSoal(){
        return view ('admin_pages.data_soal.dataSoal');
    }

    // ubah password
    
    public function viewUbahPassword(Request $request){
        $idAdmin=$request->session()->get('idAdmin');
        $data=DB::table('admins')->where('id_admin',$idAdmin)->get();
        return view('admin_pages.ubahPassword',['data' => $data]);
        
    }

    public function UbahPassword(Request $request){
        if (($request->password2) == ($request->password3)) {
            DB::table('admins')->where('id_admin',$request->id)->update([
                'password_admin' => Hash::make($request->password2)
            ]);
            return redirect('/admin/home');
        }else {
            return redirect('/admin/ubah-password')->with('passwordBeda','Password Beda');
        }


    }

    //tgl tes

    public function viewTgl(Request $request){

        $data=DB::table('tanggal_tes')->get();
        return view('admin_pages.tanggaltes',['data' => $data]);
        
    }

    public function editTanggal($id){

        $data=DB::table('tanggal_tes')->where('id_tanggalTes',$id)->get();
        return view('admin_pages.edit_dataTanggal',['data' => $data]);
    }

    public function updateTanggal(Request $request){
        DB::table('tanggal_tes')->where('id_tanggalTes',$request->id)->update([
            'keterangan_tes' => $request->ket,
            'tglMulai' => $request->tgl1,
            'tglHasil' => $request->tgl2
        ]);
        return redirect('/admin/tanggal-tes');
    }

    // rekap

    public function rekap (Request $request){

        $data=DB::table('users')
                ->where('keteranganTes','=','Selesai')
                ->paginate(5);
        return view('admin_pages.rekap_nilai.index',['data' => $data]);
        
    }

    public function lihatRekap ($id){
        $s1= DB::table('jawaban_subtes_1s')->where('sub1_idUser', '=',$id)->get();
        $s2= DB::table('jawaban_subtes_2s')->where('sub2_idUser', '=',$id)->get();
        $s3= DB::table('jawaban_subtes_3s')->where('sub3_idUser', '=',$id)->get();
        $s4= DB::table('jawaban_subtes_4s')->where('sub4_idUser', '=',$id)->get();
        $s5= DB::table('jawaban_subtes_5s')->where('sub5_idUser', '=',$id)->get();
        $s6= DB::table('jawaban_subtes_6s')->where('sub6_idUser', '=',$id)->get();
        $s7= DB::table('jawaban_subtes_7s')->where('sub7_idUser', '=',$id)->get();
        $s8= DB::table('jawaban_subtes_8s')->where('sub8_idUser', '=',$id)->get();
        $s9= DB::table('jawaban_subtes_9s')->where('sub9_idUser', '=',$id)->get();

        $jumlah1 = DB::table('subtes_1s')->get();
        $jumlah2 = DB::table('subtes_2s')->get();
        $jumlah3 = DB::table('subtes_3s')->get();
        $jumlah4 = DB::table('subtes_4s')->get();
        $jumlah5 = DB::table('subtes_5s')->get();
        $jumlah6 = DB::table('subtes_6s')->get();
        $jumlah7 = DB::table('subtes_7s')->get();
        $jumlah8 = DB::table('subtes_8s')->get();
        $jumlah9 = DB::table('subtes_9s')->get();
        
        $data = DB::table('users')->where('id_user','=',$id)->get();
        
        return view ('admin_pages.rekap_nilai.nilaiUser',[
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
    public function cetakNilaiUser ($id){
        $s1= DB::table('jawaban_subtes_1s')->where('sub1_idUser', '=',$id)->get();
        $s2= DB::table('jawaban_subtes_2s')->where('sub2_idUser', '=',$id)->get();
        $s3= DB::table('jawaban_subtes_3s')->where('sub3_idUser', '=',$id)->get();
        $s4= DB::table('jawaban_subtes_4s')->where('sub4_idUser', '=',$id)->get();
        $s5= DB::table('jawaban_subtes_5s')->where('sub5_idUser', '=',$id)->get();
        $s6= DB::table('jawaban_subtes_6s')->where('sub6_idUser', '=',$id)->get();
        $s7= DB::table('jawaban_subtes_7s')->where('sub7_idUser', '=',$id)->get();
        $s8= DB::table('jawaban_subtes_8s')->where('sub8_idUser', '=',$id)->get();
        $s9= DB::table('jawaban_subtes_9s')->where('sub9_idUser', '=',$id)->get();

        $jumlah1 = DB::table('subtes_1s')->get();
        $jumlah2 = DB::table('subtes_2s')->get();
        $jumlah3 = DB::table('subtes_3s')->get();
        $jumlah4 = DB::table('subtes_4s')->get();
        $jumlah5 = DB::table('subtes_5s')->get();
        $jumlah6 = DB::table('subtes_6s')->get();
        $jumlah7 = DB::table('subtes_7s')->get();
        $jumlah8 = DB::table('subtes_8s')->get();
        $jumlah9 = DB::table('subtes_9s')->get();
        
        $data = DB::table('users')->where('id_user','=',$id)->get();
        
        return view ('admin_pages.rekap_nilai.cetakNilai',[
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

    public function cetakSemua (Request $request){

        $data=DB::table('users')
                ->where('keteranganTes','=','Selesai')
                ->get();
        return view('admin_pages.rekap_nilai.cetakAllNilai',['data' => $data]);
        
    }

    public function nilaiUserToView ($id){
        $s1= DB::table('jawaban_subtes_1s')->where('sub1_idUser', '=',$id)->get();
        $s2= DB::table('jawaban_subtes_2s')->where('sub2_idUser', '=',$id)->get();
        $s3= DB::table('jawaban_subtes_3s')->where('sub3_idUser', '=',$id)->get();
        $s4= DB::table('jawaban_subtes_4s')->where('sub4_idUser', '=',$id)->get();
        $s5= DB::table('jawaban_subtes_5s')->where('sub5_idUser', '=',$id)->get();
        $s6= DB::table('jawaban_subtes_6s')->where('sub6_idUser', '=',$id)->get();
        $s7= DB::table('jawaban_subtes_7s')->where('sub7_idUser', '=',$id)->get();
        $s8= DB::table('jawaban_subtes_8s')->where('sub8_idUser', '=',$id)->get();
        $s9= DB::table('jawaban_subtes_9s')->where('sub9_idUser', '=',$id)->get();

        $jumlah1 = DB::table('subtes_1s')->get();
        $jumlah2 = DB::table('subtes_2s')->get();
        $jumlah3 = DB::table('subtes_3s')->get();
        $jumlah4 = DB::table('subtes_4s')->get();
        $jumlah5 = DB::table('subtes_5s')->get();
        $jumlah6 = DB::table('subtes_6s')->get();
        $jumlah7 = DB::table('subtes_7s')->get();
        $jumlah8 = DB::table('subtes_8s')->get();
        $jumlah9 = DB::table('subtes_9s')->get();
        
        $data = DB::table('users')->where('id_user','=',$id)->get();
        
        return ([
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
