<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\PendaftarKtpController;
use App\Http\Controllers\PerubahanktpController;
use App\Http\Controllers\UserhistoryController;
use App\Http\Controllers\UserPerbaruanKtpController;
use Illuminate\Routing\Console\ControllerMakeCommand;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/coba', function () {
    return view('home.coba');
});

Route::get('/paten', function () {
    return view('home.paten');
});

Route::get('/smart', function () {
    return view('home.smart');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//user
Route::get('/paten',[ControllersHomeController::class,'paten'])->name('paten');
Route::get('home/smart',[ControllersHomeController::class,'smart'])->name('smart');
Route::get('home/historypendaftaranktp',[ControllersHomeController::class,'history'])->name('history');
Route::get('home/historyperbaruanktp',[ControllersHomeController::class,'pktp'])->name('historyp');

//admin
Route::get('admin/dashboard',[ControllersHomeController::class,'admin'])->middleware(['auth','admin']);

Route::get('admin/datapendaftarktp',[PendaftarKtpController::class,'index'])->name('datapendaftarktp');
Route::get('pelayanan/pendaftaranktp',[PendaftarKtpController::class,'create'])->name('buatktp');
Route::post('/simpandaftarktp',[PendaftarKtpController::class,'store'])->name('simpandaftarktp');
Route::delete('admin/pendaftaranktp/{nik}',[PendaftarKtpController::class,'destroy'])->name('hapusktp');
Route::patch('admin/updatestatus/{nik}', [PendaftarKtpController::class, 'update'])->name('updatektp');

Route::get('admin/dataperbaruanktp',[PerubahanktpController::class,'index'])->name('dataperbaruanktp');
Route::get('pelayanan/perbaruanktp',[PerubahanktpController::class,'create'])->name('perbaruanktp');
Route::post('/simpanperubahanktp',[PerubahanktpController::class,'store'])->name('simpanperubahanktp');
Route::delete('admin/dataperbaruan/{pktp}', [PerubahanktpController::class,'destroy'])->name('hapusdataktp');
Route::patch('/updatestatus/{id}', [PerubahanktpController::class, 'update'])->name('updatestatus');

Route::get('home/historypendaftaranktp',[UserhistoryController::class,'index'])->name('history');
Route::get('home/historyperbaruanktp',[UserPerbaruanKtpController::class,'index'])->name('historyp');

Route::get('/test',[ControllersHomeController::class,'tes'])->name('test');

