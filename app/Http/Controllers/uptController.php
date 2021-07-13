<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Jurusan;
use App\Models\Kategori;
use App\Models\Ormawa;
use App\Models\Prodi;
use App\Models\Upt;
use Exception;
use Illuminate\Http\Request;

class uptController extends Controller
{
    //
    public function index()
    {
        //
        $result = Upt::all();

        return view('dashboard.content.Upt.upt', compact('result'));
    }

    public function create()
    {
        return view('dashboard.content.Upt.tambahUpt');
    }

    public function store(Request $request)
    {
        //
        try{
            $upt = new Upt();
            $upt->nama = $request->nama;
            $upt->deskripsi = $request->deskripsi;
            $upt->save();
        } catch(Exception $ex){
            return redirect('dashboard/upt')->with('error', 'Gagal Menambahkan Data!');
        }

        return redirect('dashboard/upt')->with('sukses', 'Berhasil Menambahkan Data!');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        try{
            $result = Upt::where('id', $id)->firstOrFail();
            return view('dashboard.content.Upt.updateUpt', compact('result'));
        } catch(Exception $ex){
            return redirect('dashboard/upt')->with('error', 'Gagal Edit Data!');
        }

    }

    public function update(Request $request)
    {
        try{
            $id = $request->id;
            $upt = Upt::where('id', $id)->firstOrFail();
            $upt->nama = $request->nama;
            $upt->deskripsi = $request->deskripsi;
            $upt->save();

        } catch(Exception $ex){
            return redirect('dashboard/upt')->with('error', 'Gagal Edit Data!');
        }
        return redirect('dashboard/upt')->with('sukses', 'Berhasil Edit Data!');
    }

    public function destroy($id)
    {
        try{

            $prodi = Upt::where('id', $id)->first();
            $prodi->delete();
        } catch(Exception $ex){
            return redirect('dashboard/upt')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('dashboard/upt')->with('sukses', 'Berhasil Hapus Data!');
    }
}
