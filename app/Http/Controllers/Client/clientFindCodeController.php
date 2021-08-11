<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FindCode;
use App\Models\Game;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Finder\Finder;

class clientFindCodeController extends Controller
{
    //
    public function index(){
        $gamePlayed = DB::table('scores')->where('users_id', Auth()->user()->id)->pluck('games_id');
        $findCodes = Game::where('kategoriGame_id', 1)->pluck('id');
        $gameAllow = $findCodes->diff($gamePlayed);
        $games = FindCode::whereIn('games_id', $gameAllow)->get();
        // dd($games);
        return view('client.findTheCode', compact('games'));
    }

    public function show(FindCode $findCode){
        
    }
}
