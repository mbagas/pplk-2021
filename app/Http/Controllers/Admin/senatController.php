<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SenatStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Senat;
use Exception;

class senatController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $senats = Senat::all();

    return view('dashboard.content.Senat.index', compact('senats'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $counts = Senat::count();
    $senats = Senat::get();

    if ($counts == 1) {
      $id = $senats->first()->id;
      // return view('dashboard.content.Senat.updateSenat', compact('result'));
      return redirect('dashboard/senat/' . $id . '/edit')->with('error', 'Data sudah tersedia!');
    }
    return view('dashboard.content.Senat.create', compact('senats'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SenatStoreRequest $request)
  {
    Senat::create(
      [
        'ketua'     => $request->ketua,
        'deskripsi' => $request->deskripsi,
        'website'   => $request->website,
        'youtube'   => $request->youtube,
        'instagram' => $request->instagram
      ]
    );

    return redirect()->route('dashboard.senat.index')->with('sukses', 'Berhasil Menambahkan Data!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Senat $senat)
  {

    return view('dashboard.content.Senat.edit', compact('senat'));

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(SenatStoreRequest $request, Senat $senat)
  {
    DB::transaction(function () use ($senat,$request){
        $senatData = Senat::where('id',$senat->id)->first();

        $senatData->update(
            [
              'ketua'     => $request->ketua,
              'deskripsi' => $request->deskripsi,
              'website'   => $request->website,
              'youtube'   => $request->youtube,
              'instagram' => $request->instagram
            ]
        );
    });
    return redirect()->route('dashboard.senat.index')->with('sukses', 'Berhasil Edit Data!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Senat::destroy($id);
    try {
      return redirect()->route('dashboard.senat.index')->with('sukses', 'Berhasil Hapus Data!');
    } catch (Exception $ex) {
      return redirect()->route('dashboard.senat.index')->with('error', 'Gagal Hapus Data!');
    }
  }
}
