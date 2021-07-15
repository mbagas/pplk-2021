<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    $result = Senat::all();

    return view('dashboard.content.Senat.senat', compact('result'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $counts = Senat::count();
    $result = Senat::get();

    if ($counts == 1) {
      $id = $result->first()->id;
      // return view('dashboard.content.Senat.updateSenat', compact('result'));
      return redirect('dashboard/senat/' . $id . '/edit')->with('error', 'Data sudah tersedia!');
    }
    return view('dashboard.content.Senat.tambahSenat', compact('result'));
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
      $senat = new Senat();
      $senat->ketua = $request->ketua;
      $senat->deskripsi = $request->deskripsi;
      $senat->website = $request->website;
      $senat->youtube = $request->youtube;
      $senat->instagram = $request->instagram;
      $senat->save();
    } catch (Exception $ex) {
      return redirect('dashboard/senat')->with('error', 'Gagal Menambahkan Data!');
    }

    return redirect('dashboard/senat')->with('sukses', 'Berhasil Menambahkan Data!');
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
  public function edit($id)
  {
    try {
      $result = Senat::where('id', $id)->firstOrFail();
      return view('dashboard.content.Senat.updateSenat', compact('result'));
    } catch (Exception $ex) {
      return redirect('dashboard/senat')->with('error', 'Gagal Edit Data!');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    try {
      $id = $request->id;
      $senat = Senat::where('id', $id)->firstOrFail();
      $senat->ketua = $request->ketua;
      $senat->deskripsi = $request->deskripsi;
      $senat->website = $request->website;
      $senat->youtube = $request->youtube;
      $senat->instagram = $request->instagram;
      $senat->save();
    } catch (Exception $ex) {
      return $ex;
    }
    return redirect('dashboard/senat')->with('sukses', 'Berhasil Edit Data!');
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
      return redirect('dashboard/senat')->with('sukses', 'Berhasil Hapus Data!');
    } catch (Exception $ex) {
      return redirect('dashboard/senat')->with('error', 'Gagal Hapus Data!');
    }
  }
}
