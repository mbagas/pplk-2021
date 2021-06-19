<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\prodiController;
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
    Route::post('dashboard/prodi', [prodiController::class, 'store'])->name('storeProdi');

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