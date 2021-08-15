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

    public function show($id){
        $dataUkm = Cache::rememberForever('detailOrmawa'.$id, function () use ($id) {            
            return Ormawa::with('ukms', 'artikels', 'visimisis', 'socialmedias')->where('id', $id)->firstOrFail();
        });
        return view('client.ukm.ukmDetail2', compact('dataUkm'));
    }

    public function showQR($id){
        $dataUkm = Cache::rememberForever('detailOrmawa'.$id, function () use ($id) {            
            return Ormawa::with('ukms')->where('id', $id)->firstOrFail();
        });
        return view('client.ukm.ukmBarcode', compact('dataUkm'));
    }
}
