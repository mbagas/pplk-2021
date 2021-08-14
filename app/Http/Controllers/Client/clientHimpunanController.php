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

    public function show($id){
        $dataHimpunan = Cache::rememberForever('detailOrmawa'.$id, function () use ($id) {            
            return Ormawa::with('himpunans', 'artikels', 'visimisis', 'socialmedias')->where('id', $id)->firstOrFail();
        });
        
        return view('client.himpunan.himpunanDetail2',compact('dataHimpunan'));
    }
}
