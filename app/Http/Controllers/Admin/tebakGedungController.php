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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tebakGedungs = TebakGedung::with("games")->get();
        return view('dashboard.game.tebakgedung.index', compact('tebakGedungs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.game.tebakgedung.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
                    'gambar' => url($request->file('gambar')->move('tebakGedung', $request->nama . '.' . $request->file('gambar')->extension())),
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TebakGedung  $tebakGedung
     * @return \Illuminate\Http\Response
     */
    public function show(TebakGedung $tebakGedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TebakGedung  $tebakGedung
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $tebakGedung)
    {
        //
        $dataTebakGedung = TebakGedung::with('games')->where('games_id', $tebakGedung->id)->first();
        return view('dashboard.game.TebakGedung.edit', compact('dataTebakGedung', 'tebakGedung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TebakGedung  $tebakGedung
     * @return \Illuminate\Http\Response
     */
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
                    'gambar' => url($request->file('gambar')->move('tebakGedung', $dataTebakGedung->nama . '.' . $request->file('gambar')->extension())),
                ]);
            }
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TebakGedung  $tebakGedung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Game::destroy($id);
        return redirect()->route('dashboard.tebakGedung.index')->with('sukses', 'Berhasil Menghapus Data');
    }
}
