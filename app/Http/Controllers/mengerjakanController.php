<?php

namespace App\Http\Controllers;

use App\Http\Requests\TugasMabaStoreRequest;
use App\Http\Requests\TugasMabaUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Mengerjakan;
use App\Models\Tugas;
use DateTime;
use Exception;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class mengerjakanController extends Controller
{
  public function index()
  {
    $tugass =  Tugas::all();
    return view("tugas.maba.index", compact('tugass'));
  }

  public function create()
  {
  }

  public function store(TugasMabaStoreRequest $request)
  {
    //Get Current User Id
    $UID = Auth::id();
    $user = User::where('id', $UID)->first();

    $tugas = Mengerjakan::create(
      $request->validated() + [
        'file' => url($request->file('fileTugas')->move('Submissions/' . $user->nim . $request->id, $tugas->judul . '.' . $request->file('fileTugas')->extension())),
        'jawaban' => $request->jawaban,
        'status' => false,
        'users_id' => $UID,
        'tugas_id' => $request->id,
      ]
    );

    return redirect()->route('dashboard.maba.index')->with('sukses', 'Sukses Menambahkan Data!');
  }

  public function show($id)
  {
    //Get Tugas Informations
    $tugas = Tugas::where('id', $id)->firstOrFail();

    //Get Current User Id
    $UID = Auth::id();

    //Get Submissions
    $submission = Mengerjakan::where('tugas_id', $id)->where('users_id', $UID)->first();

    //If there is a submissions
    //  Redirect to details views
    if ($submission !== null) {
      return view('tugas.maba.show', compact('tugas', 'submission'));
    }

    return view('tugas.maba.create', compact('tugas'));
  }

  public function edit($id)
  {
    try {
      //Get Current User Id
      $UID = Auth::id();

      //Get Current Time
      //  For comparisons in deadline
      $now = new DateTime();

      //Get Tugas Informations
      $tugas = Tugas::where('id', $id)->first();

      //Get Current User Submissions
      $submission = Mengerjakan::where('users_id', $UID)->where('tugas_id', $id)->first();

      if ($submission->status)
        return redirect()->route('dashboard.maba.show', $id)->with('error', 'Telah dinilai!');

      return view('tugas.maba.edit', compact('tugas', 'submission'));
    } catch (Exception $err) {
      return redirect()->route('dashboard.maba.index')->with('error', 'Gagal Menyunting Data!');
    }
  }

  public function update(TugasMabaUpdateRequest $request, $id)
  {
    //Get Current User Id
    DB::transaction(
      function () use ($request, $id) {
        $UID = Auth::id();
        $users = User::where('id', $UID)->firstOrFail();

        $submissions = Mengerjakan::where('users_id', $UID)->where('tugas_id', $id)->firstOrFail();

        $submissions->update([
          'jawaban' => $request->jawaban,
        ]);

        if ($request->hasFile('file')) {
          $submissions->update([
            'file' => url($request->file('fileTugas')->move('Submissions/' . $user->nim . $request->id, $tugas->judul . '.' . $request->file('fileTugas')->extension())),
          ]);
        }
      }
    );

    return redirect()->route('dashboard.maba.index')->with('sukses', 'Berhasil Memperbarui Data!');
  }

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
