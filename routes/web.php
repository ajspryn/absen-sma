<?php

use App\Http\Controllers\AdminGuruController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\Welcome2Controller;
use App\Http\Controllers\Welcome3Controller;
use App\Http\Controllers\GurupiketController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PengaturanjadwalController;
use App\Http\Controllers\PengaturanmapelController;
use App\Http\Controllers\SesiabsensiController;
use App\Http\Controllers\TambahsiswaController;
use App\Http\Controllers\RekapabsensiController;
use App\Http\Controllers\PengaturansiswaController;
use App\Http\Controllers\PengaturansekolahController;
use App\Http\Controllers\TingkatanKelasController;
use App\Models\Jurusan;
use App\Models\TingkatanKelas;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome2', [Welcome2Controller::class, 'index'])->name('home');
Route::get('/welcome3', [Welcome3Controller::class, 'index'])->name('home');


Route::resource('/pengaturansiswa', PengaturansiswaController::class);
Route::resource('/tambahsiswa', TambahsiswaController::class);
Route::resource('/gurupiket', GurupiketController::class);
Route::resource('/pengaturanmapel', PengaturanmapelController::class);
Route::resource('/pengaturansekolah', PengaturansekolahController::class);
Route::resource('/pengaturanjadwalmapel', PengaturanjadwalController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/tingkatankelas', TingkatanKelasController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/pengaturanguru', AdminGuruController::class);
Route::resource('/rekapabsensi', RekapabsensiController::class);
Route::resource('/sesiabsensi', SesiabsensiController::class);
