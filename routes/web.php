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
use App\Http\Controllers\Admin\findCodeController;
use App\Http\Controllers\Admin\tebakGedungController;
use App\Http\Controllers\Client\clientHomeController;
use App\Http\Controllers\Client\clientBiodataController;
use App\Http\Controllers\Client\clientFindCodeController;
use App\Http\Controllers\Client\clientHimpunanController;
use App\Http\Controllers\Client\clientJurusanController;
use App\Http\Controllers\Client\clientKabinetController;
use App\Http\Controllers\Client\clientKamusGaulController;
use App\Http\Controllers\Client\clientProdiController;
use App\Http\Controllers\Client\clientSenatController;
use App\Http\Controllers\Client\clientTugasController;
use App\Http\Controllers\Client\clientUkmController;
use App\Http\Controllers\Client\clientUptController;
use App\Http\Controllers\Client\gameController;
use App\Http\Controllers\Client\leaderBoardController;
use App\Http\Controllers\Client\logoPplkController;
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
  Route::resource('findCode', findCodeController::class)->except(['show']);
  Route::resource('tebakGedung', tebakGedungController::class)->except(['show']);

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

Route::middleware(['auth'])->group(function () {
  // Ini Route yang hanya bisa diakses Role Maba

  // Sudah responsive
  Route::get('/home', [clientHomeController::class, 'index'])->name('home');
  Route::resource('/biodata', clientBiodataController::class)->only(['index','edit','update']);
  Route::get('/dataUkm', [clientUkmController::class, 'index'])->name('ukm');
//  Route::resource('/dataUkm', clientUkmController::class)->only(['index','show','showQR']);
  Route::get('/ukmDetail/{ukm}', [clientUkmController::class, 'show'])->name('ukmDetail');
  Route::get('/jurusan', [clientJurusanController::class, 'index'])->name('jurusan');
  Route::get('/dataProdi', [clientProdiController::class, 'index'])->name('prodi');
  Route::get('/prodiDetail/{prodi}', [clientProdiController::class, 'show'])->name('prodiDetail');
  Route::get('/senat', [clientSenatController::class, 'index'])->name('senat');


  // Belum responsive
  Route::get('/upt', [clientUptController::class, 'index'])->name('dataUpt');
  Route::get('/logoPPLK', [logoPplkController::class, 'index'])->name('logoPPLK');
  Route::get('/dataKabinet', [clientKabinetController::class, 'index'])->name('kabinet'); // nopal gapaham dan belum ngerti susunan kabinet
  Route::get('/kamus', [clientKamusGaulController::class, 'index'])->name('kamus');
  Route::get('/ukmDetail/{ukm}/QRcode', [clientUkmController::class, 'showQR'])->name('ukmQR');
  // Route::get('/tugas', [clientTugasController::class, 'index'])->name('tugas');
  // Route::get('/tugas/{id}', [clientTugasController::class, 'show'])->name('detailTugas');
  Route::get('/games', [gameController::class, 'index'])->name('games');
  Route::get('/leaderboard', [leaderBoardController::class, 'index'])->name('leaderboard');

  Route::get('/dataHimpunan', [clientHimpunanController::class, 'index'])->name('himpunan');
  Route::get('/himpunanDetail/{himpunan}', [clientHimpunanController::class, 'show'])->name('himpunanDetail');

 
});

Route::middleware(['Maba'])->group(function () {
  // Ini Route yang hanya bisa diakses Role Maba
  Route::resource('/tugasMaba', clientTugasController::class)->only(['index','show','update']);
  Route::get('/games', [gameController::class, 'index'])->name('games');
  Route::get('/leaderboard', [leaderBoardController::class, 'index'])->name('leaderboard');
  Route::get('/games/findCode', [clientFindCodeController::class, 'index'])->name('findCode');
  Route::get('/games/findCode/{findCode}', [clientFindCodeController::class, 'index']);
});

// Route::get('/detailTugas', function () {
//   return view('client.tugasDetail');
// });

// Route::get('/tebakBangunan', function () {
//   return view('client.tebakGedung');
// });

// Route::get('/question', function () {
//   return view('client.questionSection');
// });

// Route::get('/answer', function () {
//   return view('client.answer');
// });

// Route::get('/report', function () {
//   return view('client.reportPage');
// });




// Route::get('/game', function () {
//   $start = strtotime("16th august 2021");

//   $submit = strtotime("19th august 2021");

//   return $submit-$start;
// });
