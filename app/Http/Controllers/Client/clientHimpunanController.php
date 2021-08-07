<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Himpunan;
use App\Models\Ormawa;

class clientHimpunanController extends Controller
{
    //
    public function index(){
        $himpunans = Cache::remember('himpunans', 3600, function (){
            return Himpunan::with('ormawas')->get();
        });
        return view('client.himpunan', compact('himpunans'));
    }
}
