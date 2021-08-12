<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Senat;

class clientSenatController extends Controller
{
    public function index(){
        $dataSenat = Senat::first();
        return view('client.senat', compact('dataSenat'));
    }
    
}
