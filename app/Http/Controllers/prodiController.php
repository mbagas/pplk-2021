<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Jurusan;
use App\Models\Kategori;
use App\Models\Ormawa;
use App\Models\Prodi;
use App\Models\SocialMedia;
use App\Models\VisiMisi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\exception_for;

class prodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Prodi::with('ormawas')->paginate(10);

        return view('dashboard.content.Prodi.prodi', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::get();
        return view('dashboard.content.Prodi.tambahProdi', compact('jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            
            $ormawa = new Ormawa();
            $ormawa->namaLengkap = $request->namaLengkap;
            $ormawa->namaSingkat = $request->namaSingkat;
            $ormawa->kategoris_id = 1;
            $ormawa->save();

            $prodi = new Prodi();
            $prodi->kepalaProdi = $request->kepalaProdi;
            $prodi->akreditasi = $request->akreditasi;
            $prodi->tahunBerdiri = $request->tahunBerdiri;
            $prodi->ruangProdi = $request->ruangProdi;
            $prodi->jumlahMahaSiswa = $request->jumlahMahasiswa;
            $prodi->kepalaProdi = $request->kepalaProdi;
            $prodi->jurusans_id = $request->jurusan;
            if($request->diagramAlir !== NULL){
                $namaFile = $request->namaSingkat.'.'.$request->diagramAlir->extension();
                $request->diagramAlir->storeAs(('diagramAlir'), $namaFile);
                $prodi->diagramAlir = 'diagramAlir/'.$namaFile;
            }
            $ormawa->prodis()->save($prodi);


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
            return $ex;
        }

        return redirect('dashboard/prodi')->with('sukses', 'Berhasil Menambahkan Data!');

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
            $jurusans = Jurusan::get();
            $result = Prodi::with('ormawas',)->where('ormawas_id', $id)->firstOrFail();
            $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();
            $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
            $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
            return view('dashboard.content.Prodi.updateProdi', compact('result', 'artikel', 'jurusans', 'socialMedia', 'visiMisi'));
        } catch(Exception $ex){
            return redirect('dashboard/prodi')->with('error', 'Gagal Edit Data!');
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
            $ormawa->namaLengkap = $request->nama;
            $ormawa->namaSingkat = $request->namaSingkat;
            $ormawa->save();

            $prodi = Prodi::where('ormawas_id', $id)->firstOrFail();
            $prodi->kepalaProdi = $request->kepalaProdi;
            $prodi->akreditasi = $request->akreditasi;
            $prodi->jurusans_id = $request->jurusan;
            $prodi->tahunBerdiri = $request->tahunBerdiri;
            $prodi->ruangProdi = $request->ruangProdi;
            $prodi->jumlahMahaSiswa = $request->jumlahMahasiswa;
            if($request->diagramAlir != NULL){
                $namaFile = $request->namaSingkat.'.'.$request->diagramAlir->extension();
                $request->diagramAlir->storeAs(('diagramAlir'), $namaFile);
                $prodi->diagramAlir = 'diagramAlir/'.$namaFile;
            }
            $prodi->save();

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
                return redirect('dashboard/prodi')->with('error', 'Gagal Edit Data!');
            }
            elseif(Auth::user()->roles_id == 6){
                return redirect('dashboardOrmawa/0')->with('error', 'Gagal Edit Data!');
            }
            
        }
        if(Auth::user()->roles_id == 1){
            return redirect('dashboard/prodi')->with('sukses', 'Berhasil Edit Data!');
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
            $artikel = Artikel::where('ormawas_id', $id)->first();
            $artikel->delete();
            
            $prodi = Prodi::where('ormawas_id', $id)->first();
            $prodi->delete();

            $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
            $socialMedia->delete();

            $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
            $visiMisi->delete();
            
            $ormawa = Ormawa::where('id', $id)->first();
            $ormawa->delete();
        } catch(Exception $ex){
            return $ex;
        }
        return redirect('dashboard/prodi')->with('sukses', 'Berhasil Hapus Data!');
    }
}
