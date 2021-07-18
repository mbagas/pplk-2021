<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use Exception;
use App\Models\Prodi;

class jurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Jurusan::all();

        return view('dashboard.content.Jurusan.jurusan', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.content.Jurusan.tambahJurusan');
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
        $request->validate([
            'namaSingkat' => 'required',
            'namaLengkap' => 'required',
            'kepalaJurusan' => 'required',
            'ruangJurusan' => 'required',
        ]);

        try{
            $jurusan = new Jurusan();
            $jurusan->namaSingkat = $request->namaSingkat;
            $jurusan->namaLengkap = $request->namaLengkap;
            $jurusan->kepalaJurusan = $request->kepalaJurusan;
            $jurusan->ruangJurusan = $request->ruangJurusan;
            $jurusan->save();
        } catch(Exception $ex){
            return redirect('dashboard/jurusan')->with('error', 'Gagal Menambahkan Data!');
        }

        return redirect('dashboard/jurusan')->with('sukses', 'Berhasil Menambahkan Data!');
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
        try{
            $result = Jurusan::where('id', $id)->firstOrFail();
            return view('dashboard.content.Jurusan.updateJurusan', compact('result'));
        } catch(Exception $ex){
            return redirect('dashboard/jurusan')->with('error', 'Gagal Edit Data!');
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
        //
        $request->validate([
            'namaSingkat' => 'required',
            'namaLengkap' => 'required',
            'kepalaJurusan' => 'required',
            'ruangJurusan' => 'required',
        ]);

        try{
            
            $jurusan = Jurusan::where('id', $id)->firstOrFail();
            $jurusan->namaSingkat = $request->namaSingkat;
            $jurusan->namaLengkap = $request->namaLengkap;
            $jurusan->kepalaJurusan = $request->kepalaJurusan;
            $jurusan->ruangJurusan = $request->ruangJurusan;
            $jurusan->save();
        } catch(Exception $ex){
            return $ex;
        }

        return redirect('dashboard/jurusan')->with('sukses', 'Berhasil Edit Data!');
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
        try{
            $jurusan = Jurusan::where('id', $id)->firstOrFail();
            $jurusan->delete();
        } catch(Exception $ex){
            return redirect('dashboard/jurusan')->with('error', 'Gagal Hapus Data!');
        }

        return redirect('dashboard/jurusan')->with('sukses', 'Berhasil Hapus Data!');
    }
}
