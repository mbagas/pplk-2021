<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdiStoreRequest;
use App\Http\Requests\ProdiUpdateRequest;
use App\Models\Ormawa;
use App\Models\Artikel;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\SocialMedia;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class prodiController extends Controller
{
    //

    public function index(){
        $prodis = Prodi::with('ormawas', 'jurusans')->get();
        return view('dashboard.content.Prodi.index', compact('prodis'));
    }

    public function create(){
        $jurusans = Jurusan::all();
        return view('dashboard.content.Prodi.create', compact('jurusans'));
    }

    public function store(ProdiStoreRequest $request){
        $ormawa = Ormawa::create(
            $request->validated() +
                [
                    'kategoris_id'  =>  1
                ]
            );

            Prodi::create(['ormawas_id' => $ormawa->id, 'jurusans_id' => $request->jurusans_id]);
            Artikel::create(['ormawas_id' => $ormawa->id]);
            VisiMisi::create(['ormawas_id' => $ormawa->id]);
            SocialMedia::create(['ormawas_id' => $ormawa->id]);
            
            return redirect()->route('dashboard.prodi.index')->with('sukses', 'Berhasil Menambahkan Data!');
    }

    public function edit(Ormawa $prodi){
        $prodiData = Prodi::with('ormawas')->where('ormawas_id', $prodi->id)->firstOrFail();
        $jurusans = Jurusan::all();
        return view('dashboard.content.Prodi.edit', compact('prodi', 'prodiData', 'jurusans'));
    }

    public function update(ProdiUpdateRequest $request, Ormawa $prodi){
        DB::transaction(function () use($prodi, $request) {
            $prodiData = Prodi::where('ormawas_id', $prodi->id)->first();
            $prodiData->update([
                    'kepalaProdi'       => $request->kepalaProdi,
                    'akreditasi'        => $request->akreditasi,
                    'tahunBerdiri'      => $request->tahunBerdiri,
                    'ruangProdi'        => $request->ruangProdi,
                    'jumlahMahasiswa'   => $request->jumlahMahasiswa,
                    'jurusans_id'       => $request->jurusans_id
                ]
            );
            
            if($request->hasFile('diagramAlir')){
                $prodiData->update([
                    'diagramAlir'   => url($request->file('diagramAlir')->move('diagramAlir', $prodi->namaSingkat . '.' . $request->file('diagramAlir')->extension()))
                ]);
            }

            if($request->has('deskripsi')){
                $artikelData = Artikel::where('ormawas_id', $prodi->id)->first();
                
                $artikelData->update(
                    [
                        'body'  => $request->deskripsi
                    ]
                );
            }

            if ($request->has('visi') or $request->has('misi')) {
                $visiMisiData = VisiMisi::where('ormawas_id', $prodi->id)->first();

                $visiMisiData->update(
                    [
                        'visi'          => $request->visi,
                        'misi'          => $request->misi,
                        'ormawas_id'    => $prodi->id
                    ]
                );
            }

            if($request->has('youtube') or $request->has('instagram') or $request->has('website')){
                $socialMediaData = SocialMedia::where('ormawas_id', $prodi->id)->first();

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
            return redirect()->route('dashboard.prodi.index')->with('sukses', 'Berhasil Edit Data!');
        }
        elseif(auth()->user()->roles_id == 6){
            return redirect()->route('dashboardOrmawa.index')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    public function destroy($id){
        $ormawa = Ormawa::where('id', $id)->firstOrFail();
        $ormawa->delete();

        return redirect()->route('dashboard.prodi.index')->with('sukses', 'Berhasil Hapus Data!');
    }

}
