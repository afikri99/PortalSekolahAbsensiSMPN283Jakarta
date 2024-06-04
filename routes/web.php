<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JadwalPelajaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PelajaranController;
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
Route::get('/', function () { return redirect('/login'); }); //auto login redirect

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'proseslogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/portal/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/portal/guru', GuruController::class)->shallow();
    Route::resource('/portal/kelas', KelasController::class)->shallow();
    Route::resource('/portal/matapelajaran', PelajaranController::class)->shallow();
    Route::resource('/portal/siswa', SiswaController::class)->shallow();

    Route::resource('/portal/absensi', JadwalPelajaranController::class)->shallow();
    
});