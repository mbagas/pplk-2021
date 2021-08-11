<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Upt;
use Illuminate\Http\Request;

class clientUptController extends Controller
{
    //
    public function index(){
        $upts = Upt::all();
        return view('client.uptItera', compact('upts'));
    }
}

