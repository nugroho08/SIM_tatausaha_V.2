<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\tuSuratMasukController;
use App\Http\Controllers\tuSuratKeluarController;
use App\Http\Controllers\uangController;

use App\Http\Controllers\kepsekSuratMasukController;
use App\Http\Controllers\KepsekSuratKeluarController;


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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::group(['role'=>'admin'],function(){
    Route::resource('/siswa', DataSiswaController::class);
    Route::resource('/pegawai', DataPegawaiController::class);
    Route::resource('/suratkeluar', SuratKeluarController::class);
    Route::resource('/suratmasuk', SuratMasukController::class);
    
    Route::get('/tambah', function(){
        return view('pages.admin.siswa.create');
    })->name('siswa_create');

});

Route::group(['role'=>'tatausaha'],function(){
    Route::resource('/loguang', uangController::class);
    Route::resource('/surat_masuk', tuSuratMasukController::class);
    Route::resource('/surat_keluar', tuSuratKeluarController::class);
    Route::resource('/buku_tamu', BukuTamuController::class);

});

Route::group(['role'=>'kepsek'],function(){
    Route::resource('/kepseksuratkeluar', kepsekSuratKeluarController::class);
    Route::resource('/kepseksuratmasuk', kepsekSuratMasukController::class);

    Route::get('/kepseksuratkeluar/export_excel', [KepsekSuratKeluarController::class, 'export_excel']);
    route::get('/kepseksuratmasuk/export_excel',[kepsekSuratMasukController::class, 'export_excel']);
});