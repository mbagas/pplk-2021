<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Ormawa;
use App\Models\Prodi;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class clientProdiController extends Controller
{
    //
    public function index(){

        $prodis = Cache::rememberForever('prodis', function () {
            return Prodi::with('ormawas')->get();
        });
        return view('client.prodi.prodi', compact('prodis'));
    }

    public function show($id){
        $dataProdi = Cache::rememberForever('detailOrmawa'.$id, function () use ($id) {            
            return Ormawa::with('prodis', 'artikels', 'visimisis', 'socialmedias')->where('id', $id)->firstOrFail();
        });
        return view('client.prodi.prodiDetail1', compact('dataProdi'));
    }
}
