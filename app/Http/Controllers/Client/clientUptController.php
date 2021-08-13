<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Upt;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class clientUptController extends Controller
{
    //
    public function index(){
        $upts = Cache::rememberForever('upts', function () {
            return Upt::all();
        });
        return view('client.uptItera', compact('upts'));
    }
}

