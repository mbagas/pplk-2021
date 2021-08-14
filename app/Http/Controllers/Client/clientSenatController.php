<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Senat;

class clientSenatController extends Controller
{
    public function index(){
        $dataSenat = Cache::rememberForever('dataSenat', function () {
            return Senat::all();
        });
        return view('client.senat', compact('dataSenat'));
    }
    
}
