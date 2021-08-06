<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\uptController;
use App\Http\Controllers\Admin\pplkController;
use App\Http\Controllers\Admin\FunFactController;
use App\Http\Controllers\Admin\himpunanController;
use App\Http\Controllers\Admin\prodiController;
use App\Http\Controllers\Admin\ukmController;
use App\Http\Controllers\Admin\jurusanController;
use App\Http\Controllers\Admin\senatController;
use App\Http\Controllers\Admin\kamusGaulController;
use App\Http\Controllers\Admin\kabinetController;
use App\Http\Controllers\Admin\ormawaController;
use App\Http\Controllers\Admin\submissionController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Admin\tugasController;
use App\Http\Controllers\Client\clientHomeController;
use App\Http\Controllers\Client\clientBiodataController;
use App\Http\Controllers\Client\clientTugasController;
use App\Http\Controllers\Client\gameController;
use App\Http\Controllers\Client\leaderBoardController;
use App\Http\Controllers\mengerjakanController;
use Illuminate\Support\Facades\Auth;
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

  // SUDAH DI OPTIMIZE (routing)
  Route::get('/', [dashboardController::class, 'index'])->name('index');
  Auth::routes();
  Route::resource('user', userController::class)->except('show');
  Route::resource('prodi', prodiController::class)->except(['show']);
  Route::resource('ukm', ukmController::class)->except(['show']);
  Route::resource('himpunan', himpunanController::class)->except(['show']);
  Route::resource('funfact', FunFactController::class)->except(['show']);
  Route::resource('jurusan', jurusanController::class)->except(['show']);
  Route::resource('senat', senatController::class)->except(['show']);
  Route::resource('pplk', pplkController::class)->except('show');
  Route::resource('upt', uptController::class)->except('show');
  Route::resource('kamusGaul', kamusGaulController::class)->except('show');
  Route::resource('kabinet', kabinetController::class)->except('show');

  // Route::get('/data-mahasiswa', [dataMahasiswa::class, 'index'])->name('data-mahasiswa');
  // Route::post('/create', [dataMahasiswa::class, 'addMahasiswa'])->name('addMahasiswa');

  Route::get('/files/{types}/{id}', [FileManager::class, 'DownloadFile'])->name('file.Download');

  Route::get('/tugas/{id}/submissions', [tugasController::class, 'pengerjaan'])->name('tugas.submissions');

  Route::resource('tugas', tugasController::class);
  Route::resource('submissions', submissionController::class);
  Route::resource('maba', mengerjakanController::class);
});

Route::middleware(['Ormawa'])->name('dashboardOrmawa.')->prefix('dashboardOrmawa')->group(function () {
  // Ini Route yang hanya bisa diakses Role Ormawa


  Route::get('/', [ormawaController::class, 'index'])->name('index');
  Route::resource('prodi', prodiController::class)->only(['update']);
  Route::resource('ukm', ukmController::class)->only(['update']);
  Route::resource('himpunan', himpunanController::class)->only(['update']);
});

Route::middleware(['DaplokMentor'])->name('dashboardDaplokMentor.')->prefix('dashboardDaplokMentor')->group(function () {
  // Ini Route yang hanya bisa diakses Role DaplokMentor

  Route::get('/', [userController::class, 'index'])->name('index');
  Route::resource('user', userController::class)->except('show');
  Route::resource('submissions', submissionController::class)->only(['index']);
});


Route::middleware(['Tugas'])->name('dashboardTugas.')->prefix('dashboardTugas')->group(function () {
  Route::get('/', [tugasController::class, 'index'])->name('index');
  Route::resource('tugas', tugasController::class);
  Route::resource('submissions', submissionController::class);
  // Ini Route yang hanya bisa diakses Role Tugas
});

Route::middleware(['Pendanaan'])->group(function () {
  // Ini Route yang hanya bisa diakses Role Pendanaan
});

Route::middleware(['Maba'])->group(function () {
  // Ini Route yang hanya bisa diakses Role Maba
});

Route::get('/home', [clientHomeController::class, 'index'])->name('home');
Route::get('/biodata', [clientBiodataController::class, 'index'])->name('biodata');
Route::get('/tugas', [clientTugasController::class, 'index'])->name('tugas');
Route::get('/games', [gameController::class, 'index'])->name('games');
Route::get('/leaderboard', [leaderBoardController::class, 'index'])->name('leaderboard');

// Route::get('/game', function () {
//   $start = strtotime("16th august 2021");

//   $submit = strtotime("19th august 2021");

//   return $submit-$start;
// });
