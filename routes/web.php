<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userLogController;
use App\Http\Controllers\Subtes1Controller;
use App\Http\Controllers\Subtes2Controller;
use App\Http\Controllers\Subtes3Controller;
use App\Http\Controllers\Subtes4Controller;
use App\Http\Controllers\Subtes5Controller;
use App\Http\Controllers\Subtes6Controller;
use App\Http\Controllers\Subtes7Controller;
use App\Http\Controllers\Subtes8Controller;
use App\Http\Controllers\Subtes9Controller;
use App\Http\Controllers\MoveController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminSoalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route for admin user
Route::prefix('admin')->group(function () {
    Route::get('/login', [adminController::class,'viewAdminLogin'])->name('view.AdminLogin');
    Route::post('/login', [adminController::class,'cekAdminLogin'])->name('cek.admin');
    Route::get('/logout', [adminController::class,'logout'])->name('admin.logout');
});
Route::middleware('adminMiddleware')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/home', [adminController::class,'home'])->name('home.admin');
        Route::get('/ubah-password', [adminController::class,'viewUbahPassword'])->name('ubah.password');
        Route::post('/ubah-password', [adminController::class,'UbahPassword'])->name('ubahPassword');
        // tanggal tes
        Route::get('/tanggal-tes', [adminController::class,'viewTgl'])->name('tanggal.tes');
        Route::get('/tanggal-tes/edit/{id}', [adminController::class,'editTanggal'])->name('Edittanggal.tes');
        Route::post('/tanggal-tes/update', [adminController::class,'updateTanggal'])->name('Updatetanggal.tes');

        // rekap hasil ujian
        Route::get('/rekap', [adminController::class,'rekap'])->name('rekap');
        Route::get('/rekap/user/{id}', [adminController::class,'lihatRekap'])->name('rekap.lihat');
        Route::get('/rekap/nilai-user/{id}', [adminController::class,'cetakNilaiUser'])->name('cetak.nilaiUser');
        Route::get('/rekap/hasil-user', [adminController::class,'cetakSemua'])->name('cetak.semua');
    
        //data peserta
        Route::get('/data-peserta', [adminController::class,'dataPeserta'])->name('data-peserta');
        Route::get('/data-peserta/edit/{id}', [adminController::class,'editData'])->name('edit.data_peserta');
        Route::post('/data-peserta/update', [adminController::class,'updateData'])->name('editData.peserta');
        Route::get('/data-peserta/hapus/{id}', [adminController::class,'hapusData'])->name('hapus.data_peserta');
    
        //data soal
        Route::get('/data-soal', [adminController::class,'dataSoal'])->name('data.soal');
        // subtes 1
        Route::get('/data-soal/subtes1', [adminSoalController::class,'dataSubtes1'])->name('sub1');
        Route::get('/data-soal/subtes1/edit/{id}', [adminSoalController::class,'EditdataSubtes1'])->name('edit.sub1');
        Route::post('/data-soal/subtes1/update', [adminSoalController::class,'updateDataSubtes1'])->name('update.sub1');
        Route::post('/data-soal/subtes1/insert', [adminSoalController::class,'tambahDataSubtes1'])->name('tambah.sub1');
        Route::get('/data-soal/subtes1/hapus/{id}', [adminSoalController::class,'HapusdataSubtes1'])->name('hapus.sub1');
        Route::get('/data-soal/subtes1/insert', [adminSoalController::class,'formSub1'])->name('viewTambah.sub1');
    
        // subtes 2
        Route::get('/data-soal/subtes2', [adminSoalController::class,'dataSubtes2'])->name('sub2');
        Route::get('/data-soal/subtes2/edit/{id}', [adminSoalController::class,'EditdataSubtes2'])->name('edit.sub2');
        Route::post('/data-soal/subtes2/update', [adminSoalController::class,'updatedataSubtes2'])->name('update.sub2');
        Route::post('/data-soal/subtes2/insert', [adminSoalController::class,'tambahdataSubtes2'])->name('tambah.sub2');
        Route::get('/data-soal/subtes2/hapus/{id}', [adminSoalController::class,'HapusdataSubtes2'])->name('hapus.sub2');
        Route::get('/data-soal/subtes2/insert', [adminSoalController::class,'formSub2'])->name('viewTambah.sub2');
    
        // subtes 3
        Route::get('/data-soal/subtes3', [adminSoalController::class,'dataSubtes3'])->name('sub3');
        Route::get('/data-soal/subtes3/edit/{id}', [adminSoalController::class,'EditdataSubtes3'])->name('edit.sub3');
        Route::post('/data-soal/subtes3/update', [adminSoalController::class,'updatedataSubtes3'])->name('update.sub3');
        Route::post('/data-soal/subtes3/insert', [adminSoalController::class,'tambahdataSubtes3'])->name('tambah.sub3');
        Route::get('/data-soal/subtes3/hapus/{id}', [adminSoalController::class,'HapusdataSubtes3'])->name('hapus.sub3');
        Route::get('/data-soal/subtes3/insert', [adminSoalController::class,'formSub3'])->name('viewTambah.sub3');
    
        // subtes 4
        Route::get('/data-soal/subtes4', [adminSoalController::class,'dataSubtes4'])->name('sub4');
        Route::get('/data-soal/subtes4/edit/{id}', [adminSoalController::class,'EditdataSubtes4'])->name('edit.sub4');
        Route::post('/data-soal/subtes4/update', [adminSoalController::class,'updatedataSubtes4'])->name('update.sub4');
        Route::post('/data-soal/subtes4/insert', [adminSoalController::class,'tambahdataSubtes4'])->name('tambah.sub4');
        Route::get('/data-soal/subtes4/hapus/{id}', [adminSoalController::class,'HapusdataSubtes4'])->name('hapus.sub4');
        Route::get('/data-soal/subtes4/insert', [adminSoalController::class,'formSub4'])->name('viewTambah.sub4');
    
        // subtes 5
        Route::get('/data-soal/subtes5', [adminSoalController::class,'dataSubtes5'])->name('sub5');
        Route::get('/data-soal/subtes5/edit/{id}', [adminSoalController::class,'EditdataSubtes5'])->name('edit.sub5');
        Route::post('/data-soal/subtes5/update', [adminSoalController::class,'updatedataSubtes5'])->name('update.sub5');
        Route::post('/data-soal/subtes5/insert', [adminSoalController::class,'tambahdataSubtes5'])->name('tambah.sub5');
        Route::get('/data-soal/subtes5/hapus/{id}', [adminSoalController::class,'HapusdataSubtes5'])->name('hapus.sub5');
        Route::get('/data-soal/subtes5/insert', [adminSoalController::class,'formSub5'])->name('viewTambah.sub5');
    
        // subtes 6
        Route::get('/data-soal/subtes6', [adminSoalController::class,'dataSubtes6'])->name('sub6');
        Route::get('/data-soal/subtes6/edit/{id}', [adminSoalController::class,'EditdataSubtes6'])->name('edit.sub6');
        Route::post('/data-soal/subtes6/update', [adminSoalController::class,'updatedataSubtes6'])->name('update.sub6');
        Route::post('/data-soal/subtes6/insert', [adminSoalController::class,'tambahdataSubtes6'])->name('tambah.sub6');
        Route::get('/data-soal/subtes6/hapus/{id}', [adminSoalController::class,'HapusdataSubtes6'])->name('hapus.sub6');
        Route::get('/data-soal/subtes6/insert', [adminSoalController::class,'formSub6'])->name('viewTambah.sub6');
        
        // subtes 7
        Route::get('/data-soal/subtes7', [adminSoalController::class,'dataSubtes7'])->name('sub7');
        Route::get('/data-soal/subtes7/edit/{id}', [adminSoalController::class,'EditdataSubtes7'])->name('edit.sub7');
        Route::post('/data-soal/subtes7/update', [adminSoalController::class,'updatedataSubtes7'])->name('update.sub7');
        Route::post('/data-soal/subtes7/insert', [adminSoalController::class,'tambahdataSubtes7'])->name('tambah.sub7');
        Route::get('/data-soal/subtes7/hapus/{id}', [adminSoalController::class,'HapusdataSubtes7'])->name('hapus.sub7');
        Route::get('/data-soal/subtes7/insert', [adminSoalController::class,'formSub7'])->name('viewTambah.sub7');
        
        // subtes 8
        Route::get('/data-soal/subtes8', [adminSoalController::class,'dataSubtes8'])->name('sub8');
        Route::get('/data-soal/subtes8/edit/{id}', [adminSoalController::class,'EditdataSubtes8'])->name('edit.sub8');
        Route::post('/data-soal/subtes8/update', [adminSoalController::class,'updatedataSubtes8'])->name('update.sub8');
        Route::post('/data-soal/subtes8/insert', [adminSoalController::class,'tambahdataSubtes8'])->name('tambah.sub8');
        Route::get('/data-soal/subtes8/hapus/{id}', [adminSoalController::class,'HapusdataSubtes8'])->name('hapus.sub8');
        Route::get('/data-soal/subtes8/insert', [adminSoalController::class,'formSub8'])->name('viewTambah.sub8');
    
        // subtes 9
        Route::get('/data-soal/subtes9', [adminSoalController::class,'dataSubtes9'])->name('sub9');
        Route::get('/data-soal/subtes9/edit/{id}', [adminSoalController::class,'EditdataSubtes9'])->name('edit.sub9');
        Route::post('/data-soal/subtes9/update', [adminSoalController::class,'updatedataSubtes9'])->name('update.sub9');
        Route::post('/data-soal/subtes9/insert', [adminSoalController::class,'tambahdataSubtes9'])->name('tambah.sub9');
        Route::get('/data-soal/subtes9/hapus/{id}', [adminSoalController::class,'HapusdataSubtes9'])->name('hapus.sub9');
        Route::get('/data-soal/subtes9/insert', [adminSoalController::class,'formSub9'])->name('viewTambah.sub9');
        //hafalan
        Route::get('/data-soal/hafalan-subtes9/edit/{id}', [adminSoalController::class,'EditdataHafalan'])->name('edit.hafsub9');
        Route::post('/data-soal/hafalan-subtes9/update', [adminSoalController::class,'updatedataHafalan'])->name('update.hufsub9');
        Route::get('/data-soal/hafalan-subtes9/hapus/{id}', [adminSoalController::class,'HapusdataHafalan'])->name('hapus.hafsub9');
        Route::get('/data-soal/hafalan-subtes9/insert', [adminSoalController::class,'formhafalan'])->name('viewTambah.Hafsub9');
        Route::post('/data-soal/hafalan-subtes9/insert', [adminSoalController::class,'tambahdataHafalan'])->name('tambah.hafsub9');
    
    
    
        
    });
});




// route for users

Route::get('/', function () {return redirect('/login');});
Route::get('/login', [userLogController::class,'viewLogin'])->name('view.login');
Route::post('/login', [userLogController::class,'cekLogin'])->name('cek.user');
// daftar user
Route::get('/registrasi', [userLogController::class,'daftar'])->name('daftarAkun');
Route::post('/registrasi', [userLogController::class,'saveData'])->name('sendData');
// waktu
Route::get('/waktu', function () { return view('user_pages.cekTglMulai'); });




// logout
Route::get('/logout', [userLogController::class,'logout'])->name('logout');

Route::middleware('userLogMiddleware')->group(function () {
    // selesai
    Route::get('/selesai', [userLogController::class,'selesai'])->name('selesai');
    Route::get('/cetak', [userLogController::class,'cetak'])->name('cetak');
    
    // sukses
    Route::get('/petunjuk-tes', [userLogController::class,'petunjukTes'])->name('petunjukTes');
    Route::prefix('before')->group(function () {
        Route::get('/subtes-1', [MoveController::class,'beforeSubtes1'])->name('hint.subtes1');
        Route::get('/subtes-2', [MoveController::class,'beforeSubtes2'])->name('hint.subtes2');
        Route::get('/subtes-3', [MoveController::class,'beforeSubtes3'])->name('hint.subtes3');
        Route::get('/subtes-4', [MoveController::class,'beforeSubtes4'])->name('hint.subtes4');
        Route::get('/subtes-5', [MoveController::class,'beforeSubtes5'])->name('hint.subtes5');
        Route::get('/subtes-6', [MoveController::class,'beforeSubtes6'])->name('hint.subtes6');
        Route::get('/subtes-7', [MoveController::class,'beforeSubtes7'])->name('hint.subtes7');
        Route::get('/subtes-8', [MoveController::class,'beforeSubtes8'])->name('hint.subtes8');
        Route::get('/subtes-9', [MoveController::class,'beforeSubtes9'])->name('hint.subtes9');
        
    });
});


Route::middleware('subtes1Middleware')->group(function () {
    Route::get('/hint-subtes-1', [Subtes1Controller::class,'hint_subtes1'])->name('pagehint.subtes1');
    Route::get('/subtes-1', [Subtes1Controller::class,'index'])->name('subtes-1');
    Route::post('/subtes-1', [Subtes1Controller::class,'sendData'])->name('cekdata');    
});


Route::middleware(['subtes2Middleware'])->group(function () {
    Route::get('/hint-subtes-2', [Subtes2Controller::class,'hint_subtes2'])->name('pagehint.subtes2');
    Route::get('/subtes-2', [Subtes2Controller::class,'index'])->name('subtes-2');
    Route::post('/subtes-2', [Subtes2Controller::class,'sendData'])->name('cekdata2');
});

Route::middleware(['subtes3Middleware'])->group(function () {
    Route::get('/hint-subtes-3', [Subtes3Controller::class,'hint_subtes3'])->name('pagehint.subtes3');
    Route::get('/subtes-3', [Subtes3Controller::class,'index'])->name('subtes-3');
    Route::post('/subtes-3', [Subtes3Controller::class,'sendData'])->name('cekdata3');
});

Route::middleware(['subtes4Middleware'])->group(function () {
    Route::get('/hint-subtes-4', [Subtes4Controller::class,'hint_subtes4'])->name('pagehint.subtes4');
    Route::get('/subtes-4', [Subtes4Controller::class,'index'])->name('subtes-4');
    Route::post('/subtes-4', [Subtes4Controller::class,'sendData'])->name('cekdata4');
});

Route::middleware(['subtes5Middleware'])->group(function () {
    Route::get('/hint-subtes-5', [Subtes5Controller::class,'hint_subtes5'])->name('pagehint.subtes5');
    Route::get('/subtes-5', [Subtes5Controller::class,'index'])->name('subtes-5');
    Route::post('/subtes-5', [Subtes5Controller::class,'sendData'])->name('cekdata5');
});

Route::middleware(['subtes6Middleware'])->group(function () {
    Route::get('/hint-subtes-6', [Subtes6Controller::class,'hint_subtes6'])->name('pagehint.subtes6');
    Route::get('/subtes-6', [Subtes6Controller::class,'index'])->name('subtes-6');
    Route::post('/subtes-6', [Subtes6Controller::class,'sendData'])->name('cekdata6');
});

Route::middleware(['subtes7Middleware'])->group(function () {
    Route::get('/hint-subtes-7', [Subtes7Controller::class,'hint_subtes7'])->name('pagehint.subtes7');
    Route::get('/subtes-7', [Subtes7Controller::class,'index'])->name('subtes-7');
    Route::post('/subtes-7', [Subtes7Controller::class,'sendData'])->name('cekdata7');
});

Route::middleware(['subtes8Middleware'])->group(function () {
    Route::get('/hint-subtes-8', [Subtes8Controller::class,'hint_subtes8'])->name('pagehint.subtes8');
    Route::get('/subtes-8', [Subtes8Controller::class,'index'])->name('subtes-8');
    Route::post('/subtes-8', [Subtes8Controller::class,'sendData'])->name('cekdata8');
});

Route::middleware(['subtes9Middleware'])->group(function () {
    Route::get('/hint-subtes-9', [Subtes9Controller::class,'hint_subtes9'])->name('pagehint.subtes9');
    Route::get('/subtes-9', [Subtes9Controller::class,'index'])->name('subtes-9');
    Route::post('/subtes-9', [Subtes9Controller::class,'sendData'])->name('cekdata9');

    // selesai
    Route::get('/subtes-9/selesai', [Subtes9Controller::class,'selesai'])->name('selesai.subtes9');

});

Route::middleware(['hafalanMiddleware'])->group(function () {
    Route::get('/hafalan-subtes-9', [Subtes9Controller::class,'hafalan'])->name('hafalan.subtes-9');
});