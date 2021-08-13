<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Kabinet;
use Illuminate\Http\Request;

class clientKabinetController extends Controller
{
    //
    public function index(){
        $dataKabinet = Kabinet::first();
        return view('client.kabinet', compact('dataKabinet'));
    }
}
