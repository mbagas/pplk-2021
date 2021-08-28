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
        $games = FindCode::with('games')->whereIn('games_id', $gameAllow)->get();
        // dd($games);
        return view('client.findTheCode', compact('games'));
    }

    public function show($id){
        $dataGame = Game::with('FindCode')->where('id', $id)->first();
        return view('client.redeemCode', compact('dataGame'));
    }

    public function submit(Request $request, Game $findCode){
        // dd($findCode);
        $check = Score::where('users_id', Auth()->user()->id)->where('games_id', $findCode->id)->count();
        if($check == 0){
            if($request->code == $findCode->FindCode->code){
                $start = strtotime("21th august 2021");
                $submit = strtotime("now");
                $totalSkor = $findCode->skor + ($findCode->skor * round(($start-$submit)/10000)/100);
                // dd(round($totalSkor));
                Score::create([
                    'users_id' => Auth()->user()->id,
                    'games_id' => $findCode->id,
                    'skor'     => round($totalSkor)
                ]);
                return redirect()->route('findCode')->with('sukses', 'code berhasil di redeem');
                
            }
            return redirect()->route('findCode')->with('error', 'code gagal di redeem');
        }
        return redirect()->route('findCode')->with('error', 'Anda meredeem terlalu banyak');
        
    }
}
