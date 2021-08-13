<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ormawa;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Cache;
use App\Models\Ukm;

class clientUkmController extends Controller
{
    //
    public function index(){

        $ukms = Cache::rememberForever('ukms', function () {
            return Ukm::with('ormawas')->get();
        });
        return view('client.ukm.ukm',compact('ukms'));
    }

    public function show(Ormawa $ukm){
        $ukmData = Ukm::with('ormawas')->where('ormawas_id', $ukm->id)->firstOrFail();
        return view('client.ukm.ukmDetail2', compact('ukm', 'ukmData'));
    }

    public function showQR(Ormawa $ukm){
        $ukmData = Ukm::with('ormawas')->where('ormawas_id', $ukm->id)->firstOrFail();
        return view('client.ukm.ukmBarcode', compact('ukm', 'ukmData'));
    }
}
