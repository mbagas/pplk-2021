<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UkmStoreRequest;
use App\Http\Requests\UkmUpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Ormawa;
use App\Models\Ukm;
use App\Models\SocialMedia;
use App\Models\VisiMisi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ukmController extends Controller
{

    public function index()
    {
        $ukms = Ukm::with('ormawas')->get();
        return view('dashboard.content.Ukm.index', compact('ukms'));
    }


    public function create()
    {
        return view('dashboard.content.Ukm.create');
    }

    public function store(UkmStoreRequest $request)
    {
        $ormawa = Ormawa::create(
            $request->validated() +
                [
                    'kategoris_id'  => 3
                ]
        );
        
        Ukm::create(['ormawas_id' => $ormawa->id]);
        Artikel::create(['ormawas_id' => $ormawa->id]);
        VisiMisi::create(['ormawas_id' => $ormawa->id]);
        SocialMedia::create(['ormawas_id' => $ormawa->id]);

        return redirect()->route('dashboard.ukm.index')->with('sukses', 'Berhasil Menambah Data UKM');
    }


    public function edit(Ormawa $ukm)
    {

        $ukmData = Ukm::with('ormawas')->where('ormawas_id', $ukm->id)->firstOrFail();
        return view('dashboard.content.Ukm.edit', compact('ukm','ukmData'));

    }


    public function update(UkmUpdateRequest $request, Ormawa $ukm)
    {

        DB::transaction(function () use ($ukm, $request){
            $ukmData = Ukm::where('ormawas_id', $ukm->id)->first();

            $ukmData->update(
                [
                    'pembina'       => $request->pembina,
                    'ketuaUmum'     => $request->ketuaUmum,
                    'tahunBerdiri'  => $request->tahunBerdiri,
                    'filosofiLogo'  => $request->filosofiLogo
                ]
            );

            if($request->hasFile('logo')){
                $ukmData->update([
                    'logo'  => url($request->file('logo')->move('ukm', $ukm->namaSingkat . '.' . $request->file('logo')->extension()))
                ]);
            }

            if($request->hasFile('barcode')){
                $ukmData->update([
                    'barcode'   => url($request->file('barcode')->move('barcode', $ukm->namaSingkat . '.' . $request->file('barcode')->extension()))
                ]);
            }

            if($request->has('deskripsi')){
                $artikelData = Artikel::where('ormawas_id', $ukm->id)->first();
                
                $artikelData->update(
                    [
                        'body'  => $request->deskripsi
                    ]
                );
            }

            if ($request->has('visi') or $request->has('misi')) {
                $visiMisiData = VisiMisi::where('ormawas_id', $ukm->id)->first();

                $visiMisiData->update(
                    [
                        'visi'          => $request->visi,
                        'misi'          => $request->misi,
                        'ormawas_id'    => $ukm->id
                    ]
                );
            }

            if($request->has('youtube') or $request->has('instagram') or $request->has('website')){
                $socialMediaData = SocialMedia::where('ormawas_id', $ukm->id)->first();

                $socialMediaData->update(
                    [
                        'youtube'   => $request->youtube,
                        'instagram' => $request->instagram,
                        'website'   => $request->website
                    ]
                    );
            }
        });

        if(auth()->user()->roles_id == 1){
            return redirect()->route('dashboard.ukm.index')->with('sukses', 'Berhasil Mengubah Data UKM');
        }
        elseif(auth()->user()->roles_id == 6){
            return redirect()->route('dashboardOrmawa.index')->with('sukses', 'Berhasil Edit Data');
        }

        
    }

    public function destroy($id)
    {
        $ormawa = Ormawa::where('id', $id)->first();
        $ormawa->delete();
 
        return redirect('dashboard/ukm')->with('sukses', 'Berhasil Hapus Data!');
    }
}
