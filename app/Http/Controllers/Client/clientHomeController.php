<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Funfact;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;


class clientHomeController extends Controller
{
    public function index(){
        $funFact = Cache::rememberForever('funfacts', function () {
            return Funfact::all();
        });
        return view('client.index', compact('funFact'));
    }
}
