<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class clientBiodataController extends Controller
{
    //
    public function index(){

        // $biodata = User::where(auth()->user()->id)->firstOrFail();
        // return view('client.biodata',compact('biodata'));
        return view('client.biodata');
    }

    public function edit(){
        $editBiodata = User::where(auth()->user()->id)->firstOrFail();
        return view('client.editBiodata',compact('editBiodata'));

    }
}
