<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ormawa;
use App\Models\Ukm;

class clientUkmController extends Controller
{
    //
    public function index(){

        $ukms = Ukm::with('ormawas')->get();
        return view('client.ukm',compact('ukms'));
    }

    public function show(Ormawa $ukm){
        $ukmData = Ukm::with('ormawas')->where('ormawas_id', $ukm->id)->firstOrFail();
        return view('client.ukmDetail2', compact('ukm', 'ukmData'));
    }

    public function showQR(Ormawa $ukm){
        $ukmData = Ukm::with('ormawas')->where('ormawas_id', $ukm->id)->firstOrFail();
        return view('client.ukmBarcode', compact('ukm', 'ukmData'));
    }
}
