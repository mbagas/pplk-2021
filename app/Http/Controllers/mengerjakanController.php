<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Mengerjakan;
use App\Models\Tugas;
use DateTime;
use Exception;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class mengerjakanController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $result =  Tugas::all();
    return view("tugas.maba.tugas", compact('result'));
  }

  /**
   * Show the form for creating a new resource.
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    try {
      //Get Current User Id
      $UID = Auth::id();

      //Create new Submission Entries
      $submissions = new Mengerjakan();

      //Check if the users upload a file or not
      if ($request->file !== null) {
        $submissions->file = $this->SaveFiles($request);
      }

      $submissions->jawaban = $request->jawaban;
      $submissions->status = false;

      $submissions->users_id = $UID;

      $tugas = Tugas::where('id', $request->id)->firstOrFail();
      $tugas->mengerjakans()->save($submissions);
    } catch (Exception $err) {
      return redirect('dashboard/maba')->with('error', 'Gagal Menambahkan Data!');
    }

    return redirect('dashboard/maba')->with('sukses', 'Sukses Menambahkan Data!');
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

    //Get Current User Id
    $UID = Auth::id();

    //Get Submissions
    $submission = Mengerjakan::where('users_id', $UID)->where('tugas_id', $id)->first();

    //If there is a submissions
    //  Redirect to details views
    if ($submission != null && $submission->count() == 1) {
      return view('tugas.maba.detailTugas', compact('tugas', 'submission'));
    }

    return view('tugas.maba.submitTugas', compact('tugas'));
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
      //Get Current User Id
      $UID = Auth::id();

      //Get Current Time
      //  For comparisons in deadline
      $now = new DateTime('now');

      //Get Tugas Informations
      $tugas = Tugas::where('id', $id)->firstOrFail();

      //Get Current User Submissions
      $submission = Mengerjakan::where('users_id', $UID)->where('tugas_id', $id)->firstOrFail();

      if ($submission->status)
        return redirect('dashboard/maba/' . $id)->with('error', 'Telah dinilai!');

      return view('tugas.maba.updateTugas', compact('tugas', 'submission'));
    } catch (Exception $err) {
      return redirect('dashboard/maba')->with('error', 'Gagal Menyunting Data!');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    try {
      $UID = Auth::id();

      $submissions = Mengerjakan::where('users_id', $UID)->where('tugas_id', $id)->firstOrFail();

      if ($request->file !== null) {
        $submissions->file = $this->SaveFiles($request);
      }

      $submissions->jawaban = $request->jawaban;

      $submissions->save();
    } catch (Exception $err) {
      return redirect('dashboard/maba')->with('error', 'Gagal Memperbarui Data!');
    }

    return redirect('dashboard/maba')->with('sukses', 'Berhasil Memperbarui Data!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }

  public function SaveFiles(Request $request)
  {
    $UID = Auth::id();
    $users = User::where('id', $UID)->firstOrFail();

    $namaFiles = $request->file->getClientOriginalName();

    if (!Storage::exists('Submissions/' . $users->nim)) {
      Storage::makeDirectory('Submissions/' . $users->nim);
    }

    $request->file->storeAs('Submissions/' . $users->nim, $namaFiles);

    return $namaFiles;
  }
}
