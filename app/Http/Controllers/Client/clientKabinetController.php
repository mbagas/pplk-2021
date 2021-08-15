<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Kabinet;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class clientKabinetController extends Controller
{
    //
    public function index(){
        $dataKabinet = Cache::rememberForever('kabinet', function () {
            return Kabinet::where('id', 1)->first();
        });
        // dd($dataKabinet);
        return view('client.kabinet', compact('dataKabinet'));
    }
}
