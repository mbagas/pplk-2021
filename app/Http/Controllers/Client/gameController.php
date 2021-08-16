<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\FindCode;
use Illuminate\Http\Request;
use App\Models\KategoriGame;
use App\Models\Score;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use App\Models\TebakGedung;


class gameController extends Controller
{
    public function index(){
        $kategoriGames = KategoriGame::all();

        $totalFindCode = FindCode::all()->count();
        $gamePlayedFindCode = DB::table('scores')->where('users_id', Auth()->user()->id)->pluck('games_id');
        $findCodes = Game::where('kategoriGame_id', 1)->pluck('id');
        $gameAllowFindCode = $findCodes->diff($gamePlayedFindCode);
        $gameFindCode = FindCode::with('games')->whereIn('games_id', $gameAllowFindCode)->count();
        // dd($gameFindCode);
        $totalTebakGedung = TebakGedung::all()->count();
        $gamePlayedTebakGedung = DB::table('scores')->where('users_id', Auth()->user()->id)->pluck('games_id');
        $tebakGedungs = Game::where('kategoriGame_id', 2)->pluck('id');
        $gameAllowTebakGedung = $tebakGedungs->diff($gamePlayedTebakGedung);
        $gameTebakGedung = TebakGedung::with('games')->whereIn('games_id', $gameAllowTebakGedung)->count();

        $score = Score::groupBy('users_id')->where('users_id', Auth()->user()->id)->sum('skor');
        // dd($score);
        return view('client.games', compact('kategoriGames', 'score', 'totalFindCode', 'gameFindCode', 'totalTebakGedung', 'gameTebakGedung'));
    }
}
