<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Kamusgaul;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class clientKamusGaulController extends Controller
{
    //
    public function index(){
        
        $kamusGauls =  Cache::rememberForever('kamusGauls', function () {
            return Kamusgaul::all();
        });
        return view('client.kamusGaul', compact('kamusGauls'));
    }
}
