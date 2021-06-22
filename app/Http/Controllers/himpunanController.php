<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Himpunan;
use App\Models\Ormawa;
use App\Models\Artikel;
use App\Models\VisiMisi;
use App\Models\SocialMedia;
use Exception;

class himpunanController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $result = Himpunan::with("ormawas")->paginate(10);

    return view("dashboard.content.Himpunan.himpunan", compact('result'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard.content.Himpunan.tambahHimpunan');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  /*
    Request:
    // Ormawa
        namaLengkap
        namaSingkat
    // Himpunan
        kodeWarna
        ketuaHimpunan
        pembina
        tahunBerdiri
        logo
        filosofiLogo
    // Social Media
        website
        youtube
        instagram
    // VisiMisi
        visi
        misi
    // Artikels
        artikel
    */
  public function store(Request $request)
  {
    try {
      $ormawa = new Ormawa();
      $ormawa->namaLengkap = $request->namaLengkap;
      $ormawa->namaSingkat = $request->namaSingkat;
      $ormawa->kategoris_id = 2;
      $ormawa->save();

      $himpunan = new Himpunan();
      $himpunan->kodeWarna = $request->kodeWarna;
      $himpunan->pembina = $request->pembina;
      $himpunan->ketuaHimpunan = $request->ketuaHimpunan;
      $himpunan->tahunBerdiri = $request->tahunBerdiri;
      $himpunan->filosofiLogo = $request->filosofiLogo;

      $logo = $this->SaveFiles($request);

      $himpunan->logo = 'Himpunan/' . $logo;

      $ormawa->himpunans()->save($himpunan);

      $socialMedia = new SocialMedia();
      $socialMedia->website = $request->website;
      $socialMedia->youtube = $request->youtube;
      $socialMedia->instagram = $request->instagram;

      $ormawa->socialmedias()->save($socialMedia);

      $visiMisi = new VisiMisi();
      $visiMisi->visi = $request->visi;
      $visiMisi->misi = $request->misi;

      $ormawa->visimisis()->save($visiMisi);

      $artikel = new Artikel();
      $artikel->body = $request->artikel;

      $ormawa->artikels()->save($artikel);
    } catch (Exception $err) {
      return redirect('dashboard/himpunan')->with('error', 'Gagal Menambahkan Data!');
    }

    return redirect('dashboard/himpunan')->with('sukses', 'Berhasil Menambahkan Data!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
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
      $himpunan = Himpunan::with('ormawas')->where('ormawas_id', $id)->firstOrFail();
      $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
      $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
      $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();

      return view('dashboard.content.Himpunan.updateHimpunan', compact('himpunan', 'socialMedia', 'visiMisi', 'artikel'));
    } catch (Exception $err) {
      return redirect('dashboard/himpunan')->with('error', 'Gagal Menyunting Data!');
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
    // Ormawa
        namaLengkap
        namaSingkat
    // Himpunan
        kodeWarna
        ketuaHimpunan
        pembina
        tahunBerdiri
        logo
        filosofiLogo
    // Social Media
        website
        youtube
        instagram
    // VisiMisi
        visi
        misi
    // Artikels
        artikel
  */
  public function update(Request $request)
  {
    try {
      //Ormawas ID
      $id = $request->id;

      $ormawa = Ormawa::where('id', $id)->firstOrFail();
      $ormawa->namaLengkap = $request->namaLengkap;
      $ormawa->namaSingkat = $request->namaSingkat;

      $ormawa->save();

      $himpunan = Himpunan::where('ormawas_id', $id)->firstOrFail();
      $himpunan->kodeWarna = $request->kodeWarna;
      $himpunan->ketuaHimpunan = $request->ketuaHimpunan;
      $himpunan->pembina = $request->pembina;
      $himpunan->tahunBerdiri = $request->tahunBerdiri;


      if ($request->logo !== null) {
        $logo = $this->SaveFiles($request);

        $himpunan->logo = 'Himpunan/' . $logo;
      }


      $himpunan->filosofiLogo = $request->filosofiLogo;

      $himpunan->save();

      $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
      $socialMedia->website = $request->website;
      $socialMedia->instagram = $request->instagram;
      $socialMedia->youtube = $request->youtube;

      $socialMedia->save();

      $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
      $visiMisi->visi = $request->visi;
      $visiMisi->misi = $request->misi;

      $visiMisi->save();

      $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();
      $artikel->body = $request->artikel;

      $artikel->save();
    } catch (Exception $err) {
      return redirect('dashboard/himpunan')->with('error', 'Gagal Memperbarui Data!');
    }

    return redirect('dashboard/himpunan')->with('sukses', 'Berhasil Memperbarui Data!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $himpunan = Himpunan::where('ormawas_id', $id)->firstOrFail();
    Storage::delete($himpunan->logo);
    $himpunan->delete();

    $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
    $socialMedia->delete();

    $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
    $visiMisi->delete();

    $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();
    $artikel->delete();

    $ormawa = Ormawa::where('id', $id)->firstOrFail();
    $ormawa->delete();

    return redirect('dashboard/himpunan')->with('sukses', 'Berhasil Menghapus Data!');
  }

  public function SaveFiles(Request $request)
  {
    $namaFiles = $request->namaSingkat . '.' . $request->logo->extension();
    $request->logo->storeAs(('Himpunan'), $namaFiles);

    return $namaFiles;
  }
}
