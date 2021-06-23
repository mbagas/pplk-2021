<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\himpunanController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\ukmController;
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

Route::middleware(['Admin'])->group(function () {
    // Ini Route yang hanya bisa diakses Role SuperAdmin
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

    Route::get('dashboard/prodi', [prodiController::class, 'index'])->name('dashboard.prodi');
    Route::get('dashboard/prodi/create', [prodiController::class, 'create'])->name('createProdi');
    Route::post('dashboard/prodi/create', [prodiController::class, 'store'])->name('storeProdi');
    Route::get('dashboard/prodi/edit/{id}', [prodiController::class, 'edit'])->name('editProdi');
    Route::post('dashboard/prodi/edit/', [prodiController::class, 'update'])->name('updateProdi');
    Route::get('dashboard/prodi/delete/{id}', [prodiController::class, 'destroy'])->name('deleteProdi');

    // Bagian Senat
    Route::get('dashboard/senat', [senatController::class, 'index'])->name('dashboard.senat');
    Route::get('dashboard/senat/create', [senatController::class, 'create'])->name('createSenat');
    Route::post('dashboard/senat/create', [senatController::class, 'store'])->name('storeSenat');
    Route::get('dashboard/senat/edit/{id}', [senatController::class, 'edit'])->name('editSenat');
    Route::post('dashboard/senat/edit/', [senatController::class, 'update'])->name('updateSenat');
    Route::get('dashboard/senat/delete/{id}', [senatController::class, 'destroy'])->name('deleteSenat');

    Route::get('dashboard/ukm', [ukmController::class, 'index'])->name('dashboard.ukm');
    Route::get('dashboard/ukm/create', [ukmController::class, 'create'])->name('createUKM');
    Route::post('dashboard/ukm/create', [ukmController::class, 'store'])->name('storeUKM');
    Route::get('dashboard/ukm/edit/{id}', [ukmController::class, 'edit'])->name('editUKM');
    Route::post('dashboard/ukm/edit/', [ukmController::class, 'update'])->name('updateUKM');
    Route::get('dashboard/ukm/delete/{id}', [ukmController::class, 'destroy'])->name('deleteProdi');

    Route::get('dashboard/himpunan', [himpunanController::class, 'index'])->name('dashboard.himpunan');
    Route::get('dashboard/himpunan/create', [himpunanController::class, 'create'])->name('createHimpunan');
    Route::post('dashboard/himpunan/create', [himpunanController::class, 'store'])->name('storeHimpunan');
    Route::get('dashboard/himpunan/edit/{id}', [himpunanController::class, 'edit'])->name('editHimpunan');
    Route::post('dashboard/himpunan/edit/', [himpunanController::class, 'update'])->name('updateHimpunan');
    Route::get('dashboard/himpunan/delete/{id}', [himpunanController::class, 'destroy'])->name('deleteHimpunan');

    Route::get('/data-mahasiswa', [dataMahasiswa::class, 'index'])->name('data-mahasiswa');
    Route::post('/create', [dataMahasiswa::class, 'addMahasiswa'])->name('addMahasiswa');
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
