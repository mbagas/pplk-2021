<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Score;
use App\Models\TebakGedung;
use Illuminate\Support\Facades\DB;

class clientTebakGedungController extends Controller
{
    //
    public function index(){
        $gamePlayed = DB::table('scores')->where('users_id', Auth()->user()->id)->pluck('games_id');
        $tebakGedungs = Game::where('kategoriGame_id', 2)->pluck('id');
        $gameAllow = $tebakGedungs->diff($gamePlayed);
        $games = TebakGedung::with('games')->whereIn('games_id', $gameAllow)->inRandomOrder()->get();
        // dd($games);
        return view('client.tebakGedung', compact('games'));
    }

    public function show($id){
        $dataGame = Game::with('TebakGedung')->where('id', $id)->first();
        // dd($dataGame->TebakGedung);
        return view('client.questionSection', compact('dataGame'));
    }

    public function submit(Request $request, Game $tebakGedung){
        // dd($tebakGedung);
        if($request->ans == $tebakGedung->TebakGedung->jawaban){
            $score = Score::create([
                'users_id' => Auth()->user()->id,
                'games_id' => $tebakGedung->id,
                'skor'     => $tebakGedung->skor
            ]);
        }
        else{
            $score = Score::create([
                'users_id' => Auth()->user()->id,
                'games_id' => $tebakGedung->id,
                'skor'     => 0
            ]);
        }
        return redirect()->route('result', $score);
    }

    public function result(Score $score){
        // dd($score);
        return view('client.answer', compact('score'));
    }
}
