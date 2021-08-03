<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HimpunanStoreRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\HimpunanUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Himpunan;
use App\Models\Ormawa;
use App\Models\Artikel;
use App\Models\VisiMisi;
use App\Models\SocialMedia;
use Exception;
use Illuminate\Support\Facades\Auth;

class himpunanController extends Controller
{
  public function index()
  {
    $himpunans = Himpunan::with("ormawas")->get();

    return view("dashboard.content.Himpunan.index", compact('himpunans'));
  }

  public function create()
  {
    return view('dashboard.content.Himpunan.create');
  }

  public function store(HimpunanStoreRequest $request)
  {
    $ormawa = Ormawa::create($request->validated() + [
      'namaLengkap' => $request->namaLengkap,
      'namaSingkat' => $request->namaSingkat,
      'kategoris_id' => 2,
    ]);

    Himpunan::create(['ormawas_id' => $ormawa->id,]);
    SocialMedia::create(['ormawas_id' => $ormawa->id,]);
    VisiMisi::create(['ormawas_id' => $ormawa->id,]);
    Artikel::create(['ormawas_id' => $ormawa->id,]);

    return redirect()->route('dashboard.himpunan.index')->with('sukses', 'Berhasil Menambahkan Data!');
  }

  public function show($id)
  {
    //
  }

  public function edit(Ormawa $himpunan)
  {

    $dataHimpunan = Himpunan::with('ormawas')->where('ormawas_id', $himpunan->id)->firstOrFail();

    return view('dashboard.content.Himpunan.edit', compact('himpunan', 'dataHimpunan'));
  }

  public function update(HimpunanUpdateRequest $request, Ormawa $himpunan)
  {
    DB::transaction(function () use ($himpunan, $request) {
      $dataHimpunan = Himpunan::with('ormawas')->where('ormawas_id', $himpunan->id)->first();

      $dataHimpunan->update([
        'kodeWarna' => $request->kodeWarna,
        'ketuaHimpunan' => $request->ketuaHimpunan,
        'pembina' => $request->pembina,
        'tahunBerdiri' => $request->tahunBerdiri,
        'filosofiLogo' => $request->filosofiLogo,
      ]);

      $himpunan->visimisis()->update([
        'visi' => $request->visi,
        'misi' => $request->misi,
      ]);

      if ($request->hasFile('logo')) {
        $dataHimpunan->update([
          'logo' => url($request->file('logo')->move('Himpunan', $himpunan->namaSingkat . '.' . $request->file('logo')->extension())),
        ]);
      }

      $himpunan->socialmedias()->update([
        'website' => $request->website,
        'instagram' => $request->instagram,
        'youtube' => $request->youtube,
      ]);

      $himpunan->artikels()->update([
        'body' => $request->deskripsi,
      ]);
    });

    if (auth()->user()->roles_id == 1) {
      return redirect('dashboard/himpunan')->with('sukses', 'Berhasil Memperbarui Data!');
    } elseif (auth()->user()->roles_id == 6) {
      return redirect('dashboardOrmawa/')->with('sukses', 'Berhasil Edit Data!');
    }
  }

  public function destroy($id)
  {
    Ormawa::destroy($id);

    if (auth()->user()->roles_id == 1) {
      return redirect('dashboard/himpunan')->with('sukses', 'Berhasil Menghapus Data!');
    } elseif (auth()->user()->roles_id == 6) {
      return redirect('dashboardOrmawa/')->with('sukses', 'Berhasil Menghapus Data!');
    }
  }
}
