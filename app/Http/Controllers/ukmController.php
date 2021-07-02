<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Ormawa;
use App\Models\Ukm;
use App\Models\SocialMedia;
use App\Models\VisiMisi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ukmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Ukm::with('ormawas')->paginate(10);
        return view('dashboard.content.Ukm.ukm', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.content.Ukm.tambahUkm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $namaFile = $request->namaSingkat.'.'.$request->logo->extension();
            $request->logo->storeAs(('ukm'), $namaFile);

            $namaFilee = $request->namaSingkat.'.'.$request->barcode->extension();
            $request->barcode->storeAs(('barcode'), $namaFile);

            $ormawa = new Ormawa();
            $ormawa->namaLengkap = $request->namaLengkap;
            $ormawa->namaSingkat = $request->namaSingkat;
            $ormawa->kategoris_id = 3;
            $ormawa->save();

            $ukm = new Ukm();
            $ukm->pembina = $request->pembina;
            $ukm->ketuaUmum = $request->ketuaUmum;
            $ukm->tahunBerdiri = $request->tahunBerdiri;
            $ukm->logo = $namaFile;
            $ukm->filosofiLogo = $request->filosofiLogo;
            $ukm->barcode = $namaFilee;
            $ormawa->ukms()->save($ukm);


            $artikel = new Artikel();
            $artikel->body = $request->deskripsi;
            $ormawa->artikels()->save($artikel);

            $visiMisi = new VisiMisi();
            $visiMisi->visi = $request->visi;
            $visiMisi->misi = $request->misi;
            $ormawa->visimisis()->save($visiMisi);

            $socialMedia = new SocialMedia();
            $socialMedia->website = $request->website;
            $socialMedia->instagram = $request->instagram;
            $socialMedia->youtube = $request->youtube;
            $ormawa->socialmedias()->save($socialMedia);
        } catch(Exception $ex){
            return redirect('dashboard/ukm')->with('error', 'Gagal Menambahkan Data!');
        }

        return redirect('dashboard/ukm')->with('sukses', 'Berhasil Menambahkan Data!');
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

        try{
            $result = Ukm::with('ormawas')->where('ormawas_id', $id)->firstOrFail();
            $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();
            $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
            $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
            return view('dashboard.content.Ukm.updateUkm', compact('result', 'artikel', 'socialMedia', 'visiMisi'));
        } catch(Exception $ex){
            return redirect('dashboard/ukm')->with('error', 'Gagal Edit Data!');
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
        try{

            $ormawa = Ormawa::where('id', $id)->firstOrFail();
            $ormawa->namaLengkap = $request->namaLengkap;
            $ormawa->namaSingkat = $request->namaSingkat;
            $ormawa->save();

            $ukm = Ukm::where('ormawas_id', $id)->first();
            $ukm->pembina = $request->pembina;
            $ukm->ketuaUmum = $request->ketuaUmum;
            $ukm->tahunBerdiri = $request->tahunBerdiri;
            $ukm->save();

            $artikel = Artikel::where('ormawas_id', $id)->first();
            $artikel->body = $request->deskripsi;
            $artikel->save();

            $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
            $visiMisi->visi = $request->visi;
            $visiMisi->misi = $request->misi;
            $visiMisi->save();

            $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
            $socialMedia->website = $request->website;
            $socialMedia->instagram = $request->instagram;
            $socialMedia->youtube = $request->youtube;
            $socialMedia->save();
        } catch(Exception $ex){
            if(Auth::user()->roles_id == 1){
                return $ex;
            }
            elseif(Auth::user()->roles_id == 6){
                return redirect('dashboardOrmawa/0')->with('error', 'Gagal Edit Data!');
            }
        }
        if(Auth::user()->roles_id == 1){
            return redirect('dashboard/ukm')->with('sukses', 'Berhasil Edit Data!');
        }
        elseif(Auth::user()->roles_id == 6){
            return redirect('dashboardOrmawa/0')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{

            $ukm = Ukm::where('ormawas_id', $id)->first();
            $ukm->delete();

            $artikel = Artikel::where('ormawas_id', $id)->first();
            $artikel->delete();

            $ormawa = Ormawa::where('id', $id)->first();
            $ormawa->delete();
        } catch(Exception $ex){
            return redirect('dashboard/ukm')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('dashboard/ukm')->with('sukses', 'Berhasil Hapus Data!');
    }
}
