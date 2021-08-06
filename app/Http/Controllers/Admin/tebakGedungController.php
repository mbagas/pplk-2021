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
                    'kategoriGame_id' =>2,
                    'skor' => $request->skor
                ]
            );

            $tebakgedung = TebakGedung::create(
                [
                    'gambar' => $request->gambar,
                    'pil1' => $request->pil1,
                    'pil2' => $request->pil2,
                    'pil3' => $request->pil3,
                    'pil4' => $request->pil4,
                    'jawaban' => $request->jawaban
                ]
                );

            $games = Game::create(
                [
                    'skor' => $request->skor
                ]
            );
        });

        return redirect()->route('dashboard.tebakgedung.index')->with('sukses', 'Berhasil Menambah Data');
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
    public function edit(TebakGedung $tebakGedung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TebakGedung  $tebakGedung
     * @return \Illuminate\Http\Response
     */
    public function update(TebakGedung $request, Game $tebakGedung)
    {
        DB::transaction(function () use($request, $tebakGedung){
            $dataTebakGedung = TebakGedung::with('games')->where('games_id',$tebakGedung->id)->first();
            
            $dataTebakGedung->update([
                'gambar' => $request->gambar,
                'pil1' => $request->pil1,
                'pil2' => $request->pil2,
                'pil3' => $request->pil3,
                'pil4' => $request->pil4,
                'jawaban' => $request->jawaban
            ]);
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TebakGedung  $tebakGedung
     * @return \Illuminate\Http\Response
     */
    public function destroy(TebakGedung $tebakGedung)
    {
        //
    }
}
