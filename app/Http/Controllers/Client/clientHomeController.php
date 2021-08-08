<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class clientHomeController extends Controller
{
    public function index(){
        $dataUser = User::where('id', auth()->user()->id)->first();
        return view('client.index', compact('dataUser'));
    }
}
