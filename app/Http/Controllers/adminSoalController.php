<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Subtes_1;
use App\Models\Subtes_2;
use App\Models\Subtes_3;
use App\Models\Subtes_4;
use App\Models\Subtes_5;
use App\Models\Subtes_6;
use App\Models\Subtes_7;
use App\Models\Subtes_8;
use App\Models\Subtes_9;
use App\Models\Hafalan_subtes9;
use Illuminate\Support\Facades\Hash;

class adminSoalController extends Controller
{
    //dataSubtes1
    public function dataSubtes1(Request $request){
        $sub1=Subtes_1::paginate(5);
        return view ('admin_pages.data_soal.sub1.index',['sub1' => $sub1]);
    }
    public function EditdataSubtes1($id){
        $data=DB::table('subtes_1s')->where('idsoal_t1',$id)->get();
        return view('admin_pages.data_soal.sub1.edit',['data' => $data]);
    }
    public function HapusdataSubtes1($id){
        DB::table('subtes_1s')->where('idsoal_t1',$id)->delete();
        return redirect('/admin/data-soal/subtes1');
    }
    public function updateDataSubtes1(Request $request){
        DB::table('subtes_1s')->where('idsoal_t1',$request->id)->update([
            'keterangan_t1' => $request->soal,
            't1_opsia' => $request->opsia,
            't1_opsib' => $request->opsib,
            't1_opsic' => $request->opsic,
            't1_opsid' => $request->opsid,
            't1_opsie' => $request->opsie,
            't1_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes1');
    }
    public function formSub1(){
        return view ('admin_pages.data_soal.sub1.tambah');
    }
    public function tambahDataSubtes1(Request $request){
        DB::table('subtes_1s')->insert([
            'keterangan_t1' => $request->soal,
            't1_opsia' => $request->opsia,
            't1_opsib' => $request->opsib,
            't1_opsic' => $request->opsic,
            't1_opsid' => $request->opsid,
            't1_opsie' => $request->opsie,
            't1_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes1');
    }

    //dataSubtes2
    public function dataSubtes2(Request $request){
        $sub2=Subtes_2::paginate(5);
        return view ('admin_pages.data_soal.sub2.index',['sub2' => $sub2]);
    }
    public function EditdataSubtes2($id){
        $data=DB::table('subtes_2s')->where('idsoal_t2',$id)->get();
        return view('admin_pages.data_soal.sub2.edit',['data' => $data]);
    }
    public function HapusdataSubtes2($id){
        DB::table('subtes_2s')->where('idsoal_t2',$id)->delete();
        return redirect('/admin/data-soal/subtes2');
    }
    public function updatedataSubtes2(Request $request){
        DB::table('subtes_2s')->where('idsoal_t2',$request->id)->update([
            'keterangan_t2' => $request->soal,
            't2_opsia' => $request->opsia,
            't2_opsib' => $request->opsib,
            't2_opsic' => $request->opsic,
            't2_opsid' => $request->opsid,
            't2_opsie' => $request->opsie,
            't2_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes2');
    }
    public function formSub2(){
        return view ('admin_pages.data_soal.sub2.tambah');
    }
    public function tambahdataSubtes2(Request $request){
        DB::table('subtes_2s')->insert([
            'keterangan_t2' => $request->soal,
            't2_opsia' => $request->opsia,
            't2_opsib' => $request->opsib,
            't2_opsic' => $request->opsic,
            't2_opsid' => $request->opsid,
            't2_opsie' => $request->opsie,
            't2_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes2');
    }

    //dataSubtes3
    public function dataSubtes3(Request $request){
        $sub3=Subtes_3::paginate(5);
        return view ('admin_pages.data_soal.sub3.index',['sub3' => $sub3]);
    }
    public function EditdataSubtes3($id){
        $data=DB::table('subtes_3s')->where('idsoal_t3',$id)->get();
        return view('admin_pages.data_soal.sub3.edit',['data' => $data]);
    }
    public function HapusdataSubtes3($id){
        DB::table('subtes_3s')->where('idsoal_t3',$id)->delete();
        return redirect('/admin/data-soal/subtes3');
    }
    public function updatedataSubtes3(Request $request){
        DB::table('subtes_3s')->where('idsoal_t3',$request->id)->update([
            'keterangan_t3' => $request->soal,
            't3_opsia' => $request->opsia,
            't3_opsib' => $request->opsib,
            't3_opsic' => $request->opsic,
            't3_opsid' => $request->opsid,
            't3_opsie' => $request->opsie,
            't3_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes3');
    }
    public function formSub3(){
        return view ('admin_pages.data_soal.sub3.tambah');
    }
    public function tambahdataSubtes3(Request $request){
        DB::table('subtes_3s')->insert([
            'keterangan_t3' => $request->soal,
            't3_opsia' => $request->opsia,
            't3_opsib' => $request->opsib,
            't3_opsic' => $request->opsic,
            't3_opsid' => $request->opsid,
            't3_opsie' => $request->opsie,
            't3_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes3');
    }

    //dataSubtes4
    public function dataSubtes4(Request $request){
        $sub4=Subtes_4::paginate(5);
        return view ('admin_pages.data_soal.sub4.index',['sub4' => $sub4]);
    }
    public function EditdataSubtes4($id){
        $data=DB::table('subtes_4s')->where('idsoal_t4',$id)->get();
        return view('admin_pages.data_soal.sub4.edit',['data' => $data]);
    }
    public function HapusdataSubtes4($id){
        DB::table('subtes_4s')->where('idsoal_t4',$id)->delete();
        return redirect('/admin/data-soal/subtes4');
    }
    public function updatedataSubtes4(Request $request){
        DB::table('subtes_4s')->where('idsoal_t4',$request->id)->update([
            'keterangan_t4' => $request->soal,
            't4_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes4');
    }
    public function formSub4(){
        return view ('admin_pages.data_soal.sub4.tambah');
    }
    public function tambahdataSubtes4(Request $request){
        DB::table('subtes_4s')->insert([
            'keterangan_t4' => $request->soal,
            't4_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes4');
    }

    //dataSubtes5
    public function dataSubtes5(Request $request){
        $sub5=Subtes_5::paginate(5);
        return view ('admin_pages.data_soal.sub5.index',['sub5' => $sub5]);
    }
    public function EditdataSubtes5($id){
        $data=DB::table('subtes_5s')->where('idsoal_t5',$id)->get();
        return view('admin_pages.data_soal.sub5.edit',['data' => $data]);
    }
    public function HapusdataSubtes5($id){
        DB::table('subtes_5s')->where('idsoal_t5',$id)->delete();
        return redirect('/admin/data-soal/subtes5');
    }
    public function updatedataSubtes5(Request $request){
        DB::table('subtes_5s')->where('idsoal_t5',$request->id)->update([
            'keterangan_t5' => $request->soal,
            't5_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes5');
    }
    public function formSub5(){
        return view ('admin_pages.data_soal.sub5.tambah');
    }
    public function tambahdataSubtes5(Request $request){
        DB::table('subtes_5s')->insert([
            'keterangan_t5' => $request->soal,
            't5_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes5');
    }

   //dataSubsub6
    public function dataSubtes6(Request $request){
        $sub6=Subtes_6::paginate(5);
        return view ('admin_pages.data_soal.sub6.index',['sub6' => $sub6]);
    }
    public function EditdataSubtes6($id){
        $data=DB::table('subtes_6s')->where('idsoal_t6',$id)->get();
        return view('admin_pages.data_soal.sub6.edit',['data' => $data]);
    }
    public function HapusdataSubtes6($id){
        DB::table('subtes_6s')->where('idsoal_t6',$id)->delete();
        return redirect('/admin/data-soal/subtes6');
    }
    public function updatedataSubtes6(Request $request){
        DB::table('subtes_6s')->where('idsoal_t6',$request->id)->update([
            'keterangan_t6' => $request->soal,
            't6_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes6');
    }
    public function formSub6(){
        return view ('admin_pages.data_soal.sub6.tambah');
    }
    public function tambahdataSubtes6(Request $request){
        DB::table('subtes_6s')->insert([
            'keterangan_t6' => $request->soal,
            't6_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes6');
    }

    //dataSubsub7
    public function dataSubtes7(Request $request){
        $sub7=Subtes_7::paginate(5);
        return view ('admin_pages.data_soal.sub7.index',['sub7' => $sub7]);
    }
    public function EditdataSubtes7($id){
        $data=DB::table('subtes_7s')->where('idsoal_t7',$id)->get();
        return view('admin_pages.data_soal.sub7.edit',['data' => $data]);
    }
    public function HapusdataSubtes7($id){
        DB::table('subtes_7s')->where('idsoal_t7',$id)->delete();
        return redirect('/admin/data-soal/subtes7');
    }
    public function updatedataSubtes7(Request $request){
        $updateOpsi=$request->updateOpsi;
        $updateSoal=$request->updateSoal;
        // tujuan 
        $lokasi = 'for-subtes/image_tes';
        if (!empty($updateSoal) && !empty($updateOpsi)) {
            // update-opsi
            $namaOpsi = $updateOpsi->getClientOriginalName();
            $exOpsi = $updateOpsi->getClientOriginalExtension();
            $sizeOpsi = $updateOpsi->getSize();
            // update-soal
            $namaSoal = $updateSoal->getClientOriginalName();
            $exSoal = $updateSoal->getClientOriginalExtension();
            $sizeSoal = $updateSoal->getSize();
            if (($sizeOpsi/1000) >300) {
                return redirect ('admin/data-soal/subtes7/edit/'.$request->id)->with('file','Ukuran Salah');
            }else{
                if (($sizeSoal/1000) >300) {
                    return redirect ('admin/data-soal/subtes7/edit/'.$request->id)->with('file2','Ukuran Salah');
                }
                else {
                    if ($exOpsi=='PNG' || $exOpsi=='png' || $exOpsi=='jpg' || $exOpsi=='JPG' || $exOpsi=='JPEG' || $exOpsi=='jpeg') {
                        if ($exSoal=='PNG' || $exSoal=='png' || $exSoal=='jpg' || $exSoal=='JPG' || $exSoal=='JPEG' || $exSoal=='jpeg') {
                            // Cek Opsi soal Jika Sudah Ada Tidak usah diupload
                            DB::table('subtes_7s')->where('idsoal_t7',$request->id)->update([
                                'mainSoal_t7' => $namaOpsi,
                                'keterangan_t7' => $namaSoal,
                                't7_jawaban' => $request->jwb
                            ]); 
                            $updateOpsi->move($lokasi,$namaOpsi);
                            $updateSoal->move($lokasi,$namaSoal);
                            return redirect('/admin/data-soal/subtes7');
                            
                        }else{
                            return redirect ('admin/data-soal/subtes7/edit'.$request->id)->with('file4','Format Salah');
                        }
                    }else {
                        return redirect ('admin/data-soal/subtes7/edit'.$request->id)->with('file3','Format Salah');

                    }
                }
            }

        }elseif (empty($updateSoal)) {
            // update opsi
            $namaOpsi = $updateOpsi->getClientOriginalName();
            $exOpsi = $updateOpsi->getClientOriginalExtension();
            $sizeOpsi = $updateOpsi->getSize();

            if (($sizeOpsi/1000) >300) {
                return redirect ('admin/data-soal/subtes7/edit/'.$request->id)->with('file','Ukuran Salah');
            }else {
                if ($exOpsi=='PNG' || $exOpsi=='png' || $exOpsi=='jpg' || $exOpsi=='JPG' || $exOpsi=='JPEG' || $exOpsi=='jpeg') {
                    DB::table('subtes_7s')->where('idsoal_t7',$request->id)->update([
                        'mainSoal_t7' => $namaOpsi,
                        't7_jawaban' => $request->jwb
                    ]); 
                    $updateOpsi->move($lokasi,$namaOpsi);
                    return redirect('/admin/data-soal/subtes7');
                }else {
                    return redirect ('admin/data-soal/subtes7/edit/'.$request->id)->with('file3','Format Salah');
                }
            }
        }else {
            // update-soal
            $namaSoal = $updateSoal->getClientOriginalName();
            $exSoal = $updateSoal->getClientOriginalExtension();
            $sizeSoal = $updateSoal->getSize();
            if (($sizeSoal/1000) >300) {
                return redirect ('admin/data-soal/subtes7/edit/'.$request->id)->with('file2','Ukuran Salah');
            }else {
                if ($exSoal=='PNG' || $exSoal=='png' || $exSoal=='jpg' || $exSoal=='JPG' || $exSoal=='JPEG' || $exSoal=='jpeg') {
                    DB::table('subtes_7s')->where('idsoal_t7',$request->id)->update([
                        'keterangan_t7' => $namaSoal,
                        't7_jawaban' => $request->jwb
                    ]); 
                    $updateSoal->move($lokasi,$namaSoal);
                    return redirect('/admin/data-soal/subtes7');
                }else {
                    return redirect ('admin/data-soal/subtes7/edit/'.$request->id)->with('file4','Format Salah');
                }
            }
        }


    }
    public function formSub7(){
        return view ('admin_pages.data_soal.sub7.tambah');
    }
    public function tambahdataSubtes7(Request $request){
        $fileOpsi = $request->opsi;
        $fileSoal = $request->soal;
        // tujuan 
        $lokasi = 'for-subtes/image_tes';
        // opsi
        $namaOpsi = $fileOpsi->getClientOriginalName();
        $exOpsi = $fileOpsi->getClientOriginalExtension();
        $sizeOpsi = $fileOpsi->getSize();
        // soal
        $namaSoal = $fileSoal->getClientOriginalName();
        $exSoal = $fileSoal->getClientOriginalExtension();
        $sizeSoal = $fileSoal->getSize();

        // validasi ukuran opsi
        if (($sizeOpsi/1000) >300) {
            return redirect ('admin/data-soal/subtes7/insert')->with('file','Ukuran Salah');
        }else{
            if (($sizeSoal/1000) >300) {
                return redirect ('admin/data-soal/subtes7/insert')->with('file2','Ukuran Salah');
            }
            else {
                if ($exOpsi=='PNG' || $exOpsi=='png' || $exOpsi=='jpg' || $exOpsi=='JPG' || $exOpsi=='JPEG' || $exOpsi=='jpeg') {
                    if ($exSoal=='PNG' || $exSoal=='png' || $exSoal=='jpg' || $exSoal=='JPG' || $exSoal=='JPEG' || $exSoal=='jpeg') {
                        // Cek Opsi soal Jika Sudah Ada Tidak usah diupload
                        $cekOpsi = DB::table('subtes_7s')
                                    ->where('mainSoal_t7', '=', $namaOpsi)
                                    ->get();
                        if (count($cekOpsi) > 0) {
                            $fileSoal->move($lokasi,$namaSoal);
                            DB::table('subtes_7s')->insert([
                                'mainSoal_t7' => $namaOpsi,
                                'keterangan_t7' => $namaSoal,
                                't7_jawaban' => $request->jwb
                            ]);
                            return redirect('/admin/data-soal/subtes7');
                            
                        }else {
                            $fileOpsi->move($lokasi,$namaOpsi);
                            $fileSoal->move($lokasi,$namaSoal);
                            DB::table('subtes_7s')->insert([
                                'mainSoal_t7' => $namaOpsi,
                                'keterangan_t7' => $namaSoal,
                                't7_jawaban' => $request->jwb
                            ]);
                            return redirect('/admin/data-soal/subtes7');
                            
                        }
                    }else{
                        return redirect ('admin/data-soal/subtes7/insert')->with('file4','Format Salah');
                    }
                }else {
                    return redirect ('admin/data-soal/subtes7/insert')->with('file3','Format Salah');

                }
            }
        }
    }

    //dataSubsub8
    public function dataSubtes8(Request $request){
        $sub8=Subtes_8::paginate(5);
        return view ('admin_pages.data_soal.sub8.index',['sub8' => $sub8]);
    }
    public function EditdataSubtes8($id){
        $data=DB::table('subtes_8s')->where('idsoal_t8',$id)->get();
        return view('admin_pages.data_soal.sub8.edit',['data' => $data]);
    }
    public function HapusdataSubtes8($id){
        DB::table('subtes_8s')->where('idsoal_t8',$id)->delete();
        return redirect('/admin/data-soal/subtes8');
    }
    public function updatedataSubtes8(Request $request){
        $updateOpsi=$request->file('updateOpsi');
        $updateSoal=$request->file('updateSoal');
        // tujuan 
        $lokasi = 'for-subtes/image_tes';
        if (!empty($updateSoal) && !empty($updateOpsi)) {
            // update-opsi
            $namaOpsi = $updateOpsi->getClientOriginalName();
            $exOpsi = $updateOpsi->getClientOriginalExtension();
            $sizeOpsi = $updateOpsi->getSize();
            // update-soal
            $namaSoal = $updateSoal->getClientOriginalName();
            $exSoal = $updateSoal->getClientOriginalExtension();
            $sizeSoal = $updateSoal->getSize();
            if (($sizeOpsi/1000) >300) {
                return redirect ('admin/data-soal/subtes8/edit/'.$request->id)->with('file','Ukuran Salah');
            }else{
                if (($sizeSoal/1000) >300) {
                    return redirect ('admin/data-soal/subtes8/edit/'.$request->id)->with('file2','Ukuran Salah');
                }
                else {
                    if ($exOpsi=='PNG' || $exOpsi=='png' || $exOpsi=='jpg' || $exOpsi=='JPG' || $exOpsi=='JPEG' || $exOpsi=='jpeg') {
                        if ($exSoal=='PNG' || $exSoal=='png' || $exSoal=='jpg' || $exSoal=='JPG' || $exSoal=='JPEG' || $exSoal=='jpeg') {
                            // Cek Opsi soal Jika Sudah Ada Tidak usah diupload
                            DB::table('subtes_8s')->where('idsoal_t8',$request->id)->update([
                                'mainSoal_t8' => $namaOpsi,
                                'keterangan_t8' => $namaSoal,
                                't8_jawaban' => $request->jwb
                            ]); 
                            $updateOpsi->move($lokasi,$namaOpsi);
                            $updateSoal->move($lokasi,$namaSoal);
                            return redirect('/admin/data-soal/subtes8');
                            
                        }else{
                            return redirect ('admin/data-soal/subtes8/edit'.$request->id)->with('file4','Format Salah');
                        }
                    }else {
                        return redirect ('admin/data-soal/subtes8/edit'.$request->id)->with('file3','Format Salah');
    
                    }
                }
            }

        }elseif (empty($updateSoal)) {
            // update opsi
            $namaOpsi = $updateOpsi->getClientOriginalName();
            $exOpsi = $updateOpsi->getClientOriginalExtension();
            $sizeOpsi = $updateOpsi->getSize();
            if (($sizeOpsi/1000) >300) {
                return redirect ('admin/data-soal/subtes8/edit/'.$request->id)->with('file','Ukuran Salah');
            }else {
                if ($exOpsi=='PNG' || $exOpsi=='png' || $exOpsi=='jpg' || $exOpsi=='JPG' || $exOpsi=='JPEG' || $exOpsi=='jpeg') {
                    DB::table('subtes_8s')->where('idsoal_t8',$request->id)->update([
                        'mainSoal_t8' => $namaOpsi,
                        't8_jawaban' => $request->jwb
                    ]); 
                    $updateOpsi->move($lokasi,$namaOpsi);
                    return redirect('/admin/data-soal/subtes8');
                }else {
                    return redirect ('admin/data-soal/subtes8/edit/'.$request->id)->with('file3','Format Salah');
                }
            }
        }elseif (empty($updateOpsi)) {
            // update-soal
            $namaSoal = $updateSoal->getClientOriginalName();
            $exSoal = $updateSoal->getClientOriginalExtension();
            $sizeSoal = $updateSoal->getSize();
            if (($sizeSoal/1000) >300) {
                return redirect ('admin/data-soal/subtes8/edit/'.$request->id)->with('file2','Ukuran Salah');
            }else {
                if ($exSoal=='PNG' || $exSoal=='png' || $exSoal=='jpg' || $exSoal=='JPG' || $exSoal=='JPEG' || $exSoal=='jpeg') {
                    DB::table('subtes_8s')->where('idsoal_t8',$request->id)->update([
                        'keterangan_t8' => $namaSoal,
                        't8_jawaban' => $request->jwb
                    ]); 
                    $updateSoal->move($lokasi,$namaSoal);
                    return redirect('/admin/data-soal/subtes8');
                }else {
                    return redirect ('admin/data-soal/subtes8/edit/'.$request->id)->with('file4','Format Salah');
                }
            }
        }


    }
    public function formSub8(){
        return view ('admin_pages.data_soal.sub8.tambah');
    }
    public function tambahdataSubtes8(Request $request){
        $fileOpsi = $request->opsi;
        $fileSoal = $request->soal;
        // tujuan 
        $lokasi = 'for-subtes/image_tes';
        // opsi
        $namaOpsi = $fileOpsi->getClientOriginalName();
        $exOpsi = $fileOpsi->getClientOriginalExtension();
        $sizeOpsi = $fileOpsi->getSize();
        // soal
        $namaSoal = $fileSoal->getClientOriginalName();
        $exSoal = $fileSoal->getClientOriginalExtension();
        $sizeSoal = $fileSoal->getSize();

        // validasi ukuran opsi
        if (($sizeOpsi/1000) >300) {
            return redirect ('admin/data-soal/subtes8/insert')->with('file','Ukuran Salah');
        }else{
            if (($sizeSoal/1000) >300) {
                return redirect ('admin/data-soal/subtes8/insert')->with('file2','Ukuran Salah');
            }
            else {
                if ($exOpsi=='PNG' || $exOpsi=='png' || $exOpsi=='jpg' || $exOpsi=='JPG' || $exOpsi=='JPEG' || $exOpsi=='jpeg') {
                    if ($exSoal=='PNG' || $exSoal=='png' || $exSoal=='jpg' || $exSoal=='JPG' || $exSoal=='JPEG' || $exSoal=='jpeg') {
                        // Cek Opsi soal Jika Sudah Ada Tidak usah diupload
                        $cekOpsi = DB::table('subtes_8s')
                                    ->where('mainSoal_t8', '=', $namaOpsi)
                                    ->get();
                        if (count($cekOpsi) > 0) {
                            $fileSoal->move($lokasi,$namaSoal);
                            DB::table('subtes_8s')->insert([
                                'mainSoal_t8' => $namaOpsi,
                                'keterangan_t8' => $namaSoal,
                                't8_jawaban' => $request->jwb
                            ]);
                            return redirect('/admin/data-soal/subtes8');
                            
                        }else {
                            $fileOpsi->move($lokasi,$namaOpsi);
                            $fileSoal->move($lokasi,$namaSoal);
                            DB::table('subtes_8s')->insert([
                                'mainSoal_t8' => $namaOpsi,
                                'keterangan_t8' => $namaSoal,
                                't8_jawaban' => $request->jwb
                            ]);
                            return redirect('/admin/data-soal/subtes8');
                            
                        }
                    }else{
                        return redirect ('admin/data-soal/subtes8/insert')->with('file4','Format Salah');
                    }
                }else {
                    return redirect ('admin/data-soal/subtes8/insert')->with('file3','Format Salah');

                }
            }
        }
    }

    //dataSubtes9
    public function dataSubtes9(Request $request){
        $sub9=Subtes_9::paginate(5);
        $haf9=Hafalan_subtes9::all();
        return view ('admin_pages.data_soal.sub9.index',['sub9' => $sub9],['haf9' => $haf9]);
    }
    public function EditdataSubtes9($id){
        $data=DB::table('subtes_9s')->where('idsoal_t9',$id)->get();
        return view('admin_pages.data_soal.sub9.edit',['data' => $data]);
    }
    public function HapusdataSubtes9($id){
        DB::table('subtes_9s')->where('idsoal_t9',$id)->delete();
        return redirect('/admin/data-soal/subtes9');
    }
    public function updateDataSubtes9(Request $request){
        DB::table('subtes_9s')->where('idsoal_t9',$request->id)->update([
            'keterangan_t9' => $request->soal,
            't9_opsia' => $request->opsia,
            't9_opsib' => $request->opsib,
            't9_opsic' => $request->opsic,
            't9_opsid' => $request->opsid,
            't9_opsie' => $request->opsie,
            't9_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes9');
    }
    public function formSub9(){
        return view ('admin_pages.data_soal.sub9.tambah');
    }
    public function tambahDataSubtes9(Request $request){
        DB::table('subtes_9s')->insert([
            'keterangan_t9' => $request->soal,
            't9_opsia' => $request->opsia,
            't9_opsib' => $request->opsib,
            't9_opsic' => $request->opsic,
            't9_opsid' => $request->opsid,
            't9_opsie' => $request->opsie,
            't9_jawaban' => $request->jwb
        ]);
        return redirect('/admin/data-soal/subtes9');
    }

    //hafalan
    public function EditdataHafalan($id){
        $data=DB::table('hafalan_subtes9s')->where('id_hafalan',$id)->get();
        return view('admin_pages.data_soal.sub9.editHafalan',['data' => $data]);
    }
    public function updatedataHafalan(Request $request){
        DB::table('hafalan_subtes9s')->where('id_hafalan',$request->id)->update([
            'kata_kunci' => $request->kata_kunci,
            'sub_kata1' => $request->sub1,
            'sub_kata2' => $request->sub3,
            'sub_kata3' => $request->sub3,
            'sub_kata4' => $request->sub4,
            'sub_kata5' => $request->sub5
        ]);
        return redirect('/admin/data-soal/subtes9');
    }
    public function HapusdataHafalan($id){
        DB::table('hafalan_subtes9s')->where('id_hafalan',$id)->delete();
        return redirect('/admin/data-soal/subtes9');
    }
    public function formhafalan(){
        return view ('admin_pages.data_soal.sub9.tambah-hafalan');
    }
    public function tambahdataHafalan(Request $request){
        DB::table('hafalan_subtes9s')->insert([
            'kata_kunci' => $request->kata_kunci,
            'sub_kata1' => $request->sub1,
            'sub_kata2' => $request->sub3,
            'sub_kata3' => $request->sub3,
            'sub_kata4' => $request->sub4,
            'sub_kata5' => $request->sub5
        ]);
        return redirect('/admin/data-soal/subtes9');
    }

}
