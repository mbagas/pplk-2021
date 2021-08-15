<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class leaderBoardController extends Controller
{
    //
    public function index(){
        // $lead1 = Score::with('user')->selectRaw('sum(skor) as skor')->selectRaw('users_id')->max('skor');
        // $lead2 = Score::with('user')->selectRaw('sum(skor) as skor')->selectRaw('users_id')->orderBy('skor')->groupBy('users_id')->skip(1)->paginate(1);
        // $lead3 = Score::with('user')->selectRaw('sum(skor) as skor')->selectRaw('users_id')->orderBy('skor')->groupBy('users_id')->skip(2)->paginate(1);
        $scores = Score::with('user')->selectRaw('sum(skor) as skor')->selectRaw('users_id')->orderBy('skor', 'DESC')->groupBy('users_id')->skip(3)->paginate(100);
        $selfScore = Score::with('user')->selectRaw('sum(skor) as skor')->selectRaw('users_id')->where('users_id', Auth()->user()->id)->groupBy('users_id')->first();
        // dd($selfScore);
        return view('client.leaderboard', compact('scores', 'selfScore'));
    }
}
