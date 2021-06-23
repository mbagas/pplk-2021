<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\uptController;
use App\Http\Controllers\pplkController;
use App\Http\Controllers\FunFactController;
use App\Http\Controllers\himpunanController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\ukmController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\senatController;

use Illuminate\Support\Facades\Route;

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



Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['Admin'])->name('dashboard.')->prefix('dashboard')->group(function () {
    // Ini Route yang hanya bisa diakses Role SuperAdmin

    // SUDAH DI OPTIMIZE (routing)
    Route::get('/', [dashboardController::class, 'index'])->name('index');

    Route::resource('prodi', prodiController::class)->except(['show']);
    Route::resource('ukm', ukmController::class)->except(['show']);
    Route::resource('himpunan', himpunanController::class)->except(['show']);
    Route::resource('funfact', FunFactController::class)->except(['show']);
    Route::resource('jurusan', jurusanController::class)->except(['show']);

    Route::get('/data-mahasiswa', [dataMahasiswa::class, 'index'])->name('data-mahasiswa');
    Route::post('/create', [dataMahasiswa::class, 'addMahasiswa'])->name('addMahasiswa');

//    Route::get('/data-mahasiswa', [dataMahasiswa::class, 'index'])->name('data-mahasiswa');
//    Route::post('/create', [dataMahasiswa::class, 'addMahasiswa'])->name('addMahasiswa');
  
    // BELUM DI OPTIMIZE (routing)
    Route::get('dashboard/senat', [senatController::class, 'index'])->name('senat');
    Route::get('dashboard/senat/create', [senatController::class, 'create'])->name('createSenat');
    Route::post('dashboard/senat/create', [senatController::class, 'store'])->name('storeSenat');
    Route::get('dashboard/senat/edit/{id}', [senatController::class, 'edit'])->name('editSenat');
    Route::post('dashboard/senat/edit/', [senatController::class, 'update'])->name('updateSenat');
    Route::get('dashboard/senat/delete/{id}', [senatController::class, 'destroy'])->name('deleteSenat');

    Route::get('dashboard/upt', [uptController::class, 'index'])->name('upt');
    Route::get('dashboard/upt/create', [uptController::class, 'create'])->name('createUPT');
    Route::post('dashboard/upt/create', [uptController::class, 'store'])->name('storeUPT');
    Route::get('dashboard/upt/edit/{id}', [uptController::class, 'edit'])->name('editUPT');
    Route::post('dashboard/upt/edit/', [uptController::class, 'update'])->name('updateUPT');
    Route::get('dashboard/upt/delete/{id}', [uptController::class, 'destroy'])->name('deleteUPT');

    Route::get('dashboard/pplk', [pplkController::class, 'index'])->name('PPLK');
    Route::get('dashboard/pplk/create', [pplkController::class, 'create'])->name('createPPLK');
    Route::post('dashboard/pplk/create',[pplkController::class, 'store'])->name('storePPLK');
    Route::get('dashboard/pplk/edit/{id}', [pplkController::class, 'edit'])->name('editPPLK');
    Route::post('dashboard/pplk/edit/', [pplkController::class, 'update'])->name('updatePPLK');
    Route::get('dashboard/pplk/delete/{id}',[pplkController::class, 'destroy'])->name('deletePPLK');
    
});


Route::middleware(['Tugas'])->group(function () {
    // Ini Route yang hanya bisa diakses Role Tugas
});

Route::middleware(['DaplokMentor'])->group(function () {
    // Ini Route yang hanya bisa diakses Role DaplokMentor
});

Route::middleware(['Pendanaan'])->group(function () {
    // Ini Route yang hanya bisa diakses Role Pendanaan
});

Route::middleware(['Maba'])->group(function () {
    // Ini Route yang hanya bisa diakses Role Maba
});

