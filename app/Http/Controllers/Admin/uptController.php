<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UptStoreRequest;
use App\Models\Artikel;
use App\Models\Jurusan;
use App\Models\Kategori;
use App\Models\Ormawa;
use App\Models\Prodi;
use App\Models\Upt;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class uptController extends Controller
{
    //
    public function index()
    {
        //
        $upts = Upt::all();

        return view('dashboard.content.Upt.index', compact('upts'));
    }

    public function create()
    {
        return view('dashboard.content.Upt.create');
    }

    public function store(UptStoreRequest $request)
    {
        //
        Upt::create(
            [
                'nama'          => $request->nama,
                'deskripsi'      => $request->deskripsi,
            ]
        );

        return redirect()->route('dashboard.upt.index')->with('sukses','Berhasil Menambahkan Data!');

    }

    public function show($id)
    {
        //
    }

    public function edit(Upt $upt)
    {
        try{
            $result = Upt::where('id', $upt->id)->firstOrFail();
            return view('dashboard.content.Upt.edit',compact('result','upt'));
        } catch(Exception $ex){
            return redirect('dashboard/upt')->with('error', 'Gagal Edit Data!');
        }
    }

    public function update(UptStoreRequest $request, Upt $upt)
    {
        DB::transaction(function () use ($upt, $request){
            $uptData = Upt::where('id', $upt->id)->first();

            $uptData->update(
                [
                    'nama'          => $request->nama,
                    'deskripsi'     => $request->deskripsi
                ]
            );

            if($request->has('deskripsi')){

                $uptData->update(
                    [
                        'deskripsi'  => $request->deskripsi
                    ]
                );
            }
        });
        return redirect()->route('dashboard.upt.index')->with('sukses', 'Berhasil Edit Data!');
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
