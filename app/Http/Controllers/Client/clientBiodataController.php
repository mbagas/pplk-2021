<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ormawa;
use App\Models\Prodi;

class clientBiodataController extends Controller
{
    //
    public function index(){
        $biodataUser = User::where('id',auth()->user()->id)->firstOrFail();
        if($biodataUser->prodis_id != NULL){
            $prodi = Prodi::with('ormawas')->where('id', $biodataUser->prodis_id)->first();
            $ormawa = Ormawa::where('id', $prodi->ormawas_id)->first();
            $biodataUser->namaProdi = $ormawa->namaLengkap;
        }
        return view('client.biodata',compact('biodataUser'));
    }

    public function edit($id){
        $editBiodata = User::where('id', $id)->firstOrFail();
        $prodi = Prodi::with('ormawas')->where('id', $editBiodata->prodis_id)->first();
        $ormawa = Ormawa::where('id', $prodi->ormawas_id)->first();
        $editBiodata->namaProdi = $ormawa->namaLengkap;
        $prodis = Prodi::all();
        return view('client.editBiodata',compact('editBiodata', 'prodis'));

    }

    public function update($id){
        $userData = User::where('id', $id)->first();
        if($request->hasFile('diagramAlir')){
            $userData->update([
                'diagramAlir'   => url($request->file('diagramAlir')->move('diagramAlir', $prodi->namaSingkat . '.' . $request->file('diagramAlir')->extension()))
            ]);
        }
    }
}
