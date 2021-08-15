<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriGame;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;


class gameController extends Controller
{
    public function index(){
        $kategoriGames = KategoriGame::all();
        $score = Score::groupBy('users_id')->where('users_id', Auth()->user()->id)->sum('skor');
        // dd($score);
        return view('client.games', compact('kategoriGames', 'score'));
    }
}
