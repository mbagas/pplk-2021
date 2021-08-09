<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FindCode;
use App\Models\Game;
use App\Models\Score;

class clientFindCodeController extends Controller
{
    //
    public function index(){
        $findCodes = Game::where('kategoriGames_id', 1)->whereNotExists(Score::where('users_id', Auth()->user()->id)->get());
        dd($findCodes);
    }
}
