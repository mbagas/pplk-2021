<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FindCode;
use App\Http\Requests\FindCodeStoreRequest;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class findCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $findCodes = FindCode::with("games")->get();
        return view("dashboard.game.findCode.index", compact('findCodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("dashboard.game.findCode.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FindCodeStoreRequest $request)
    {
        //
        DB::transaction(function () use ($request) {
            $game = Game::create(
                [
                    'kategoriGame_id' => 1,
                    'skor'            => $request->skor,
                ]
            );

            $findCode = FindCode::create(
                [
                    'nama'      => $request->nama,
                    'gambar'    => url($request->file('gambar')->move('findCode', $request->nama . '.' . $request->file('gambar')->extension())),
                    'code'      => $request->code,
                    'games_id'  => $game->id,
                ]
            );

        });
        
        return redirect()->route('dashboard.findCode.index')->with('sukses', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $findCode)
    {
        //
        $dataFindCode = FindCode::with('games')->where('games_id', $findCode->id)->first();
        return view('dashboard.game.FindCode.edit', compact('dataFindCode', 'findCode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(findCodeStoreRequest $request, Game $findCode)
    {
        //
        // dd($request);
        DB::transaction(function () use ($findCode,$request) {
            $findCode->update([
                'skor' => $request->skor
            ]);

            $dataFindCode = FindCode::with('games')->where('games_id', $findCode->id)->first();

            $dataFindCode->update([
                'nama'  => $request->nama,
                'code'  => $request->code,
            ]);

            if($request->hasFile('gambar')){
                $dataFindCode->update([
                    'gambar' => url($request->file('gambar')->move('findCode', $dataFindCode->nama . '.' . $request->file('gambar')->extension())),
                ]);
            }
        });
        return redirect()->route('dashboard.findCode.index')->with('sukses', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Game::destroy($id);
        return redirect()->route('dashboard.findCode.index')->with('sukses', 'Berhasil Menghapus Data');
    }
}
