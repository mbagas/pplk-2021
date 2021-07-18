<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PplkStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Pplk;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pplkController extends Controller
{
    
    public function index()
    {
        //
        $pplks = Pplk::all();

        return view('dashboard.content.Pplk.index', compact('pplks'));
    }


    public function create()
    {
        //
        $result  = Pplk::get();
        $counts  = Pplk::count();

        if($counts == 1){
            $id = $result->first()->id;

            return redirect('dashboard/pplk/'. $id .'/edit')->with('error','Data sudah tersedia!');
        }

        return view('dashboard.content.Pplk.create', compact('result'));
    }

    
    public function store(PplkStoreRequest $request)
    {
        //
        Pplk::create(
            [
                'logo'  => url($request->file('logo')->move('pplk','logo'.'.'.$request->file('logo')->extension())),
                'visi'  => $request->visi,
                'misi'  => $request->misi,
            ]
        );

        return redirect()-> route('dashboard.pplk.index')->with('sukses', 'Berhasil menambah Data!');    
    }

    
    public function show($id)
    {
        //
    }


    public function edit(Pplk $pplk)
    {

        return view('dashboard.content.Pplk.edit', compact('pplk'));

    }


    public function update(PplkStoreRequest $request, Pplk $pplk)
    {
        //
        DB::transaction(function () use ($pplk, $request) {
            $pplkData = Pplk::where('id', $pplk->id)->first();

            $pplkData->update(
                [
                    'visi'  => $request->visi,
                    'misi'  => $request->misi
                ]
            );

            if($request->hasFile('logo')){
                $pplkData->update(
                    [
                        'logo'  => url($request->file('logo')->move('pplk','logo'.'.'.$request->file('logo')->extension()))
                    ]
                );
            }
        });
        
        return redirect()->route('dashboard.pplk.index')->with('sukses', 'Berhasil Edit Data!');
    }

    
    public function destroy($id)
    {
        //
        Pplk::destroy($id);
        try{
            return redirect('dashboard/pplk')->with('sukses', 'Berhasil Hapus Data!');
        }
        
        catch(Exception $ex){
            return redirect('dashboard/pplk')->with('error', 'Gagal Hapus Data!');
        }    
    }
}
