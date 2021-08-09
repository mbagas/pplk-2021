<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriGame;

class gameController extends Controller
{
    public function index(){
        $kategoriGames = KategoriGame::all();
        return view('client.games', compact('kategoriGames'));
    }
}
