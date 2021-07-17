<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KamusGaulStoreRequest;
use App\Models\Kamusgaul;
use Exception;
use Illuminate\Http\Request;

class kamusGaulController extends Controller
{

    public function index()
    {
        //
        $kamusGauls = Kamusgaul::all();
        return view('dashboard.content.KamusGaul.index', compact('kamusGauls'));
    }

    public function create()
    {
        //
        return view('dashboard.content.KamusGaul.create');
    }

    public function store(KamusGaulStoreRequest $request)
    {
        //
        Kamusgaul::create(
            $request->validated()
        );
        return redirect()->route('dashboard.kamusGaul.index')->with('sukses', 'Berhasil Menambahkan Data!');

    }

    public function edit(Kamusgaul $kamusGaul)
    {
        //
        $kamusGaulData = Kamusgaul::where('id', $kamusGaul->id)->firstOrFail();
        return view('dashboard.content.KamusGaul.edit', compact('kamusGaulData'));

    }


    public function update(KamusGaulStoreRequest $request, Kamusgaul $kamusGaul)
    {
        //
        $kamusGaulData = Kamusgaul::where('id', $kamusGaul->id)->first();

        $kamusGaulData->update(
            [
                'gaul'  => $request->gaul,
                'asli'  => $request->asli
            ]
        );
        return redirect()->route('dashboard.kamusGaul.index')->with('sukses', 'Berhasil Edit Data!');
    }


    public function destroy($id)
    {
        //
        try{

            $prodi = Kamusgaul::where('id', $id)->first();
            $prodi->delete();
        } catch(Exception $ex){
            return redirect('dashboard/kamusGaul')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('dashboard/kamusGaul')->with('sukses', 'Berhasil Hapus Data!');
    }
}
