<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Jurusan;
use App\Models\Kategori;
use App\Models\Ormawa;
use App\Models\Prodi;
use Illuminate\Http\Request;

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
        $jurusans = Jurusan::get();

        return view('dashboard.content.prodi', compact('result', 'jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
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
        //
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
        //
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
}
