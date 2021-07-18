<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\KabinetStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Kabinet;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kabinetController extends Controller
{

    public function index()
    {
        //
        $kabinets = Kabinet::all();

        return view('dashboard.content.Kabinet.index', compact('kabinets'));
    }

    public function create()
    {
        //
        $result = Kabinet::get();
        $counts = Kabinet::count();

        if($counts == 1){
         $id = $result->first()->id;

         return redirect('dashboard/kabinet/' . $id . '/edit')->with('error', 'Data sudah tersedia!');
        }

        return view('dashboard.content.Kabinet.create',compact('result'));
    }

    public function store(KabinetStoreRequest $request)
    {
        Kabinet::create(
            [
                'nama'          => $request->nama,
                'presiden'      => $request->presiden,
                'sekjen'        => $request->sekjen,
                'organigram'    => url($request->file('organigram')->move('kabinet','organigram' . '.' . $request->file('organigram')->extension())),
                'logo'          => url($request->file('logo')->move('kabinet','logo' . '.' . $request->file('logo')->extension())),
                'filosofiLogo'  => $request->filosofiLogo,
                'deskripsi'     => $request->deskripsi,
            ]
        );

        

        return redirect()->route('dashboard.kabinet.index')->with('sukses','Berhasil Menambahkan Data!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Kabinet $kabinet)
    {
        return view('dashboard.content.Kabinet.edit',compact('kabinet'));
    }

    public function update(KabinetStoreRequest $request, Kabinet $kabinet)
    {
        DB::transaction(function () use ($kabinet, $request){
            $kabinetData = Kabinet::where('id', $kabinet->id)->first();

            $kabinetData->update(
                [
                    'nama'          => $request->nama,
                    'presiden'     => $request->presiden,
                    'sekjen'        => $request->sekjen,
                    'filosofiLogo'  => $request->filosofiLogo,
                    'deksripsi'     => $request->deskripsi
                ]
            );

            if($request->hasFile('organigram')){
                $kabinetData->update(
                    [
                        'organigram' => url($request->file('organigram')->move('kabinet','organigram' . '.' . $request->file('organigram')->extension()))
                    ]
                );
            }

            if($request->hasFile('logo')){
                $kabinetData->update(
                    [
                        'logo' => url($request->file('logo')->move('kabinet','logo' . '.' . $request->file('logo')->extension()))
                    ]
                );
            }
        });
        return redirect()->route('dashboard.kabinet.index')->with('sukses', 'Berhasil Edit Data!');
    }


    public function destroy($id)
    {
        //
        Kabinet::destroy($id);
        try{
            return redirect('dashboard/kabinet')->with('sukses', 'Berhasil Hapus Data!');
        } catch(Exception $ex){
            return redirect('dashboard/kabinet')->with('error', 'Gagal Hapus Data!');
        }
    }
}
