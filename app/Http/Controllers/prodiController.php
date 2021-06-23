<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Jurusan;
use App\Models\Kategori;
use App\Models\Ormawa;
use App\Models\Prodi;
use Exception;
use Illuminate\Http\Request;

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

        return view('dashboard.content.prodi', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::get();
        return view('dashboard.content.tambahProdi', compact('jurusans'));
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
            $ormawa->namaLengkap = $request->nama;
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
            $prodi->diagramAlir = 'alir.jpg';
            $ormawa->prodis()->save($prodi);


            $artikel = new Artikel();
            $artikel->body = $request->artikel;
            $ormawa->artikels()->save($artikel);
        } catch(Exception $ex){
            return redirect('dashboard/prodi')->with('error', 'Gagal Menambahkan Data!');
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
            return view('dashboard.content.updateProdi', compact('result', 'artikel', 'jurusans'));
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
            $prodi->save();

            $artikel = Artikel::where('ormawas_id', $id)->first();
            $artikel->body = $request->artikel;
            $artikel->save();
        } catch(Exception $ex){
            return redirect('dashboard/prodi')->with('error', 'Gagal Edit Data!');
        }
        return redirect('dashboard/prodi')->with('sukses', 'Berhasil Edit Data!');
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

            $prodi = Prodi::where('ormawas_id', $id)->first();
            $prodi->delete();

            $artikel = Artikel::where('ormawas_id', $id)->first();
            $artikel->delete();

            $ormawa = Ormawa::where('id', $id)->first();
            $ormawa->delete();
        } catch(Exception $ex){
            return redirect('dashboard/prodi')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('dashboard/prodi')->with('sukses', 'Berhasil Hapus Data!');
    }
}
