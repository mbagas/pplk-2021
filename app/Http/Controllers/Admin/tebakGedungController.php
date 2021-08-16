<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TebakGedung;
use App\Models\Game;
use App\Http\Requests\TebakGedungStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tebakGedungController extends Controller
{

    public function index()
    {
        $tebakGedungs = TebakGedung::with("games")->get();
        return view('dashboard.game.tebakGedung.index', compact('tebakGedungs'));
    }

    public function create()
    {
        return view('dashboard.game.tebakGedung.create');
    }

    public function store(TebakGedungStoreRequest $request)
    {
        DB::transaction(function () use($request){
            $game = Game::create(
                [
                    'kategoriGame_id' => 2,
                    'skor' => $request->skor
                ]
            );

            $tebakgedung = TebakGedung::create(
                [
                    'gambar' => url($request->file('gambar')->move('tebakGedung', $game->id . '.' . $request->file('gambar')->extension())),
                    'pil1' => $request->pil1,
                    'pil2' => $request->pil2,
                    'pil3' => $request->pil3,
                    'pil4' => $request->pil4,
                    'jawaban' => $request->jawaban,
                    'games_id'=> $game->id
                ]
                );

        });

        return redirect()->route('dashboard.tebakGedung.index')->with('sukses', 'Berhasil Menambah Data');
    }

    public function edit(Game $tebakGedung)
    {
        //
        $dataTebakGedung = TebakGedung::with('games')->where('games_id', $tebakGedung->id)->first();
        return view('dashboard.game.TebakGedung.edit', compact('dataTebakGedung', 'tebakGedung'));
    }

    public function update(TebakGedungStoreRequest $request, Game $tebakGedung)
    {
        DB::transaction(function () use($request, $tebakGedung){
            $tebakGedung->update([
                'skor' => $request->skor
            ]);
            $dataTebakGedung = TebakGedung::with('games')->where('games_id',$tebakGedung->id)->first();
            
            $dataTebakGedung->update([
                'pil1' => $request->pil1,
                'pil2' => $request->pil2,
                'pil3' => $request->pil3,
                'pil4' => $request->pil4,
                'jawaban' => $request->jawaban
            ]);

            if($request->hasFile('gambar')){
                $dataTebakGedung->update([
                    'gambar' => url($request->file('gambar')->move('tebakGedung', $tebakGedung->id . '.' . $request->file('gambar')->extension())),
                ]);
            }
        });
        return redirect()->route('dashboard.tebakGedung.index')->with('sukses', 'Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        //
        Game::destroy($id);
        return redirect()->route('dashboard.tebakGedung.index')->with('sukses', 'Berhasil Menghapus Data');
    }
}
