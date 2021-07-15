<?php

namespace App\Http\Controllers;

use App\Http\Requests\TugasStoreRequest;
use App\Http\Requests\TugasUpdateRequest;
use App\Models\Mengerjakan;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Tugas;
use Exception;

class tugasController extends Controller
{
  public function index()
  {
    $tugass = Tugas::all();

    return view('tugas.content.index', compact('tugass'));
  }

  public function create()
  {
    return view('tugas.content.create');
  }

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
  public function store(TugasStoreRequest $request)
  {
    $tugas = Tugas::create(
      $request->validated() + [
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'format' => $request->format,
        'file' => url($request->file('file')->move('Tugas', $request->file('file')->getClientOriginalName())),
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
      ]
    );

    for ($i = 0; $i < count($request->nama_params); $i++) {
      Parameter::create([
        'nama' => $request->nama_params[$i],
        'persen' => $request->persen[$i],
        'tugas_id' => $tugas->id,
      ]);
    }

    return redirect()->route('dashboard.tugas.index')->with('sukses', 'Berhasil Menambahkan Data!');
  }

  public function show($id)
  {
    //Get Tugas Informations
    $tugas = Tugas::where('id', $id)->first();

    return view('tugas.content.show', compact('tugas'));
  }

  public function pengerjaan($id)
  {
    //Get Any Submissions Informations
    $submissions = Mengerjakan::all()->where('id', $id);

    return view('tugas.content.submissions', compact('submissions'));
  }

  public function edit($id)
  {
    try {
      $tugas = Tugas::where('id', $id)->firstOrFail();

      return view('tugas.content.edit', compact('tugas'));
    } catch (Exception $err) {
      return redirect()->route('dashboard.tugas.index')->with('error', 'Gagal Menyunting Data!');
    }
  }

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
  public function update(TugasUpdateRequest $request, $id)
  {
    DB::transaction(
      function () use ($request, $id) {
        $tugas = Tugas::where('id', $id)->firstOrFail();

        $tugas->update([
          'judul' => $request->judul,
          'deskripsi' => $request->deskripsi,
          'format' => $request->format,
        ]);

        if ($request->start_time !== null) {
          $tugas->update([
            'start_time' => $request->start_time,
          ]);
        }

        if ($request->end_time !== null) {
          $tugas->update([
            'end_time' => $request->end_time,
          ]);
        }

        if ($request->hasFile('file')) {
          $tugas->update([
            'file' => url($request->file('file')->move('Tugas', $request->file('file')->getClientOriginalName())),
          ]);
        }
      }
    );

    return redirect()->route('dashboard.tugas.index')->with('sukses', 'Berhasil Memperbarui Data!');
  }


  public function destroy($id)
  {
    $tugas = Tugas::where('id', $id)->firstOrFail();
    $tugas->parameters()->delete();
    $tugas->mengerjakans()->delete();
    $tugas->delete();

    try {
      return redirect()->route('dashboard.tugas.index')->with('sukses', 'Berhasil Menghapus Tugas!');
    } catch (Exception $err) {
      return redirect()->route('dashboard.tugas.index')->with('error', 'Gagal Menghapus Tugas!');
    }
  }
}
