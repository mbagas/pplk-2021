<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Himpunan;
use App\Models\Ormawa;
use App\Models\VisiMisi;
use App\Models\Artikel;
use Illuminate\Support\Facades\Cache;

class clientHimpunanController extends Controller
{
    //
    public function index(){
        $himpunans = Cache::rememberForever('himpunans', function () {
            return Himpunan::with("ormawas")->get();
        });
        return view('client.himpunan.himpunan', compact('himpunans'));
    }

    public function show(Ormawa $himpunan){
            $dataHimpunan = Himpunan::with('ormawas')->where('ormawas_id', $himpunan->id)->firstOrFail();
        	$dataVisiMisi = VisiMisi::with('ormawas')->where('ormawas_id', $himpunan->id)->firstOrFail();
        	$dataArtikel = Artikel::with('ormawas')->where('ormawas_id', $himpunan->id)->firstOrFail();
        return view('client.himpunan.himpunanDetail2',compact('dataHimpunan','himpunan','dataVisiMisi','dataArtikel'));
    }
}
