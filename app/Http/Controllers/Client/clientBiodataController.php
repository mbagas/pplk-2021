<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ormawa;


class clientBiodataController extends Controller
{
    //
    public function index(Ormawa $prodi){

        // $biodata = User::where('id',auth()->user()->id)->firstOrFail();
        $biodataUser = User::where('id',auth()->user()->id)->firstOrFail();
        $prodiUser = User::with('ormawas')->where('prodis_id',$prodi->id)->firstOrFail();
        return view('client.biodata',compact('biodataUser','prodiUser'));
        // return view('client.biodata');
    }

    public function edit(){
        $editBiodata = User::where('id',auth()->user()->id)->firstOrFail();
        return view('client.editBiodata',compact('editBiodata'));

    }
}
