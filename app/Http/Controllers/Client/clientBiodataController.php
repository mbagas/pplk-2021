<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ormawa;
use App\Models\Prodi;
use Illuminate\Support\Facades\DB;

class clientBiodataController extends Controller
{

    public function index(){
        if(auth()->user()->id == 5440){
            return redirect('home');
        }
        $biodataUser = User::where('id',auth()->user()->id)->firstOrFail();
        if($biodataUser->prodis_id != NULL){
            $prodi = Prodi::with('ormawas')->where('id', $biodataUser->prodis_id)->first();
            $ormawa = Ormawa::where('id', $prodi->ormawas_id)->first();
            $biodataUser->namaProdi = $ormawa->namaLengkap;
        }
        return view('client.biodata.biodata',compact('biodataUser'));
    }

    public function edit($id){
        $editBiodata = User::where('id', $id)->firstOrFail();
        return view('client.biodata.editBiodata',compact('editBiodata'));

    }

    public function update(Request $request,User $id){
        // dd($request);
        $userData = User::where('id', auth()->user()->id)->first();
        if($request->hasFile('img')){
            $userData->update([
                'img'   => url($request->file('img')->move('fotoUser', $userData->id . '.' . $request->file('img')->extension()))
            ]);
        }


        return redirect('biodata')->with('sukses','Foto profil Berhasil diganti');
    }
}
