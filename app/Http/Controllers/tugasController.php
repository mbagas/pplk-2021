<?php

namespace App\Http\Controllers;

use App\Models\Mengerjakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Tugas;
use Exception;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class tugasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $result = Tugas::all();

    return view('tugas.content.tugas', compact('result'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('tugas.content.tambahTugas');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  /*
    Request:
    // Tugas
        judul
        deskripsi
        format
        file
        start_time
        end_time
  */
  public function store(Request $request)
  {
    try {
      $tugas = new Tugas();
      $tugas->judul = $request->judul;
      $tugas->deskripsi = $request->deskripsi;
      $tugas->format = $request->format;

      $file = $this->SaveFiles($request);

      $tugas->file = $file;

      $tugas->start_time = $request->start_time;
      $tugas->end_time = $request->end_time;

      $tugas->save();
    } catch (Exception $err) {
      return redirect('dashboard/tugas')->with('error', 'Gagal Menambahkan Data!');
    }

    return redirect('dashboard/tugas')->with('sukses', 'Berhasil Menambahkan Data!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //Get Tugas Informations
    $tugas = Tugas::where('id', $id)->firstOrFail();

    return view('tugas.content.detailTugas', compact('tugas'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function pengerjaan($id)
  {
    //Get Any Submissions Informations

    $submissions = DB::table('mengerjakans')->join('users', 'users_id', '=', 'users.id')->select('*')->get();

    return view('tugas.content.submissions', compact('submissions'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

    try {
      $tugas = Tugas::where('id', $id)->firstOrFail();

      return view('tugas.content.updateTugas', compact('tugas'));
    } catch (Exception $err) {
      return redirect('dashboard/tugas')->with('error', 'Gagal Menyunting Data!');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  /*
    Request:
    // Tugas
        judul
        deskripsi
        format
        file
        start_time
        end_time
  */
  public function update(Request $request, $id)
  {
    try {
      $tugas = Tugas::where('id', $id)->firstOrFail();
      $tugas->judul = $request->judul;
      $tugas->deskripsi = $request->deskripsi;
      $tugas->format = $request->format;

      if ($request->file !== null) {
        $file = $this->SaveFiles($request);

        $tugas->file = $file;
      }

      error_log('Start : ' . $request->start_time);
      error_log('End : ' . $request->end_time);

      if ($request->start_time !== null) {
        $tugas->start_time = $request->start_time;
      }

      if ($request->start_time !== null) {
        $tugas->end_time = $request->end_time;
      }

      $tugas->save();
    } catch (Exception $err) {
      return redirect('dashboard/tugas')->with('error', 'Gagal Memperbarui Data!');
    }

    return redirect('dashboard/tugas')->with('sukses', 'Berhasil Memperbarui Data!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $tugas = Tugas::where('id', $id)->firstOrFail();
    Storage::delete($tugas->file);
    $tugas->delete();
  }

  public function SaveFiles(Request $request)
  {
    $namaFiles = $request->file->getClientOriginalName();

    if (!Storage::exists('Tugas')) {
      Storage::makeDirectory('Tugas');
    }

    $request->file->storeAs(('Tugas'), $namaFiles);

    return $namaFiles;
  }
}
