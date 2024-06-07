<?php

use App\Http\Controllers\Aftersales\AksesorisController;
use App\Http\Controllers\Aftersales\BodicatController;
use App\Http\Controllers\Aftersales\CmsSparepartController;
use App\Http\Controllers\Aftersales\MaintenanceController;
use App\Http\Controllers\Aftersales\SparepartController;
use App\Http\Controllers\Aftersales\SparepartKategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BrosurController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\Kendaraan\ExteriorController;
use App\Http\Controllers\Kendaraan\InteriorController;
use App\Http\Controllers\Kendaraan\KendaraanAksesorisController;
use App\Http\Controllers\Kendaraan\KendaraanController;
use App\Http\Controllers\Kendaraan\LineupController;
use App\Http\Controllers\Kendaraan\PerformaceController;
use App\Http\Controllers\Kendaraan\SafetyController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TestDriveController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/carousel',[CarouselController::class,'index']);
Route::post('/banner',[CarouselController::class,'add_banner']);
Route::get('/banner/{id}',[CarouselController::class,'delete_banner']);

Route::get('/brosur',[BrosurController::class,'index']);
Route::get('/brosur/add',[BrosurController::class,'add']);
Route::post('/brosur/add',[BrosurController::class,'add_brosur']);
Route::get('/brosur/edit/{id}',[BrosurController::class,'edit']);
Route::post('/brosur/edit/{id}',[BrosurController::class,'update']);
Route::get('/brosur/delete/{id}',[BrosurController::class,'delete']);

Route::get('/cms',[BeritaController::class,'index']);
Route::get('/cms/add',[BeritaController::class,'add']);
Route::post('/cms/add',[BeritaController::class,'add_action']);
Route::get('/cms/edit/{id}',[BeritaController::class,'edit']);
Route::post('/cms/edit/{id}',[BeritaController::class,'update']);
Route::get('/cms/delete/{id}',[BeritaController::class,'delete']);
Route::post('/uploadGambarFormBerita',[BeritaController::class,'image_upload'])->name('ckeditor.upload');
Route::post('/deleteGambarFormBerita',[BeritaController::class,'image_delete'])->name('ckeditor.deleteImage');

Route::get('/kendaraan',[KendaraanController::class,'index']);
Route::get('/kendaraan/add',[KendaraanController::class,'add']);
Route::post('/kendaraan/add',[KendaraanController::class,'add_action']);
Route::get('/kendaraan/edit/{id}',[KendaraanController::class,'edit']);
Route::post('/kendaraan/edit/{id}',[KendaraanController::class,'update']);
Route::get('/kendaraan/delete/{id}',[KendaraanController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/aksesoris',[KendaraanAksesorisController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/aksesoris/add',[KendaraanAksesorisController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/aksesoris/add',[KendaraanAksesorisController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/aksesoris/edit/{id_aksesoris}',[KendaraanAksesorisController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/aksesoris/edit/{id_aksesoris}',[KendaraanAksesorisController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/aksesoris/delete/{id_aksesoris}',[KendaraanAksesorisController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/safety',[SafetyController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/safety/add',[SafetyController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/safety/add',[SafetyController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/safety/edit/{id_safety}',[SafetyController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/safety/edit/{id_safety}',[SafetyController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/safety/delete/{id_safety}',[SafetyController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/performance',[PerformaceController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/performance/add',[PerformaceController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/performance/add',[PerformaceController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/performance/edit/{id_safety}',[PerformaceController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/performance/edit/{id_safety}',[PerformaceController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/performance/delete/{id_safety}',[PerformaceController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/interior',[InteriorController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/interior/add',[InteriorController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/interior/add',[InteriorController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/interior/edit/{id_safety}',[InteriorController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/interior/edit/{id_safety}',[InteriorController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/interior/delete/{id_safety}',[InteriorController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/exterior',[ExteriorController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/exterior/add',[ExteriorController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/exterior/add',[ExteriorController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/exterior/edit/{id_safety}',[ExteriorController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/exterior/edit/{id_safety}',[ExteriorController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/exterior/delete/{id_safety}',[ExteriorController::class,'delete']);

Route::get('/kendaraan/{id_kendaraan}/lineup',[LineupController::class,'index']);
Route::get('/kendaraan/{id_kendaraan}/lineup/add',[LineupController::class,'add']);
Route::post('/kendaraan/{id_kendaraan}/lineup/add',[LineupController::class,'add_action']);
Route::get('/kendaraan/{id_kendaraan}/lineup/edit/{id_safety}',[LineupController::class,'edit']);
Route::post('/kendaraan/{id_kendaraan}/lineup/edit/{id_safety}',[LineupController::class,'update']);
Route::get('/kendaraan/{id_kendaraan}/lineup/delete/{id_safety}',[LineupController::class,'delete']);
    
Route::get('/cabang',[CabangController::class,'index']);
Route::get('/cabang/add',[CabangController::class,'add']);
Route::post('/cabang/add',[CabangController::class,'add_action']);
Route::get('/cabang/edit/{id}',[CabangController::class,'edit']);
Route::post('/cabang/edit/{id}',[CabangController::class,'update']);
Route::get('/cabang/delete/{id}',[CabangController::class,'delete']);

Route::get('/sejarah_perusahaan',[SejarahController::class,'index']);
Route::post('/sejarah_perusahaan',[SejarahController::class,'add_action']);
Route::get('/sejarah_perusahaan_timeline/{id}',[SejarahController::class,'delete']);
Route::get('/bodicat',[BodicatController::class,'index']);
Route::post('/bodicat',[BodicatController::class,'add_action']);

Route::get('/aksesoris',[AksesorisController::class,'index']);
Route::post('/aksesoris',[AksesorisController::class,'add_action']);

Route::get('/cms_sparepart',[CmsSparepartController::class,'index']);
Route::post('/cms_sparepart',[CmsSparepartController::class,'add_action']);

Route::get('/maintenance',[MaintenanceController::class,'index']);
Route::post('/maintenance',[MaintenanceController::class,'add_action']);

Route::get('/sparepart_kategori',[SparepartKategoriController::class,'index']);
Route::get('/sparepart_kategori/add',[SparepartKategoriController::class,'add']);
Route::post('/sparepart_kategori/add',[SparepartKategoriController::class,'add_action']);
Route::get('/sparepart_kategori/edit/{id}',[SparepartKategoriController::class,'edit']);
Route::post('/sparepart_kategori/edit/{id}',[SparepartKategoriController::class,'update']);
Route::get('/sparepart_kategori/delete/{id}',[SparepartKategoriController::class,'delete']);

Route::get('/sparepart',[SparepartController::class,'index']);
Route::get('/sparepart/add',[SparepartController::class,'add']);
Route::post('/sparepart/add',[SparepartController::class,'add_action']);
Route::get('/sparepart/edit/{id}',[SparepartController::class,'edit']);
Route::post('/sparepart/edit/{id}',[SparepartController::class,'update']);
Route::get('/sparepart/delete/{id}',[SparepartController::class,'delete']);

Route::get('/setting',[SettingController::class,'index']);
Route::post('/setting',[SettingController::class,'add_action']);
});
Route::get('/', [MainController::class,'index']);

Route::get('/tentang-kami/sejarah-perusahaan',[SejarahController::class,'show']);

Route::post('/youtube',[CarouselController::class,'add_youtube']);



Route::get('/list-brosur',[BrosurController::class,'show']);



Route::get('/berita',[BeritaController::class,'list']);
Route::get('/berita/{slug}',[BeritaController::class,'show']);



Route::get('/produk/kendaraan/{slug}',[KendaraanController::class,'show']);


Route::get('/dealer',[CabangController::class,'show']);
Route::get('/api/dealer',[CabangController::class,'api']);


Route::get('/aftersales/bodicat',[BodicatController::class,'show']);

Route::get('/aftersales/aksesoris',[AksesorisController::class,'show']);


Route::get('/aftersales/sparepart',[CmsSparepartController::class,'show']);
Route::get('/aftersales/sparepart/{id}',[CmsSparepartController::class,'detail']);



Route::get('/aftersales/maintenance',[MaintenanceController::class,'show']);



Route::get('/test-drive',[TestDriveController::class,'show']);
Route::post('/test-drive',[TestDriveController::class,'add_action']);
Route::get('/list-testdrive',[TestDriveController::class,'index']);



Route::get('/kontak',[KontakController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
