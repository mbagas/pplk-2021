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

    public function index()
    {
        //
        $findCodes = FindCode::with("games")->get();
        return view("dashboard.game.findCode.index", compact('findCodes'));
    }

    public function create()
    {
        //
        return view("dashboard.game.findCode.create");
    }

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

    public function edit(Game $findCode)
    {
        //
        $dataFindCode = FindCode::with('games')->where('games_id', $findCode->id)->first();
        return view('dashboard.game.findCode.edit', compact('dataFindCode', 'findCode'));
    }

    public function update(FindCodeStoreRequest $request, Game $findCode)
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

    public function destroy($id)
    {
        //
        Game::destroy($id);
        return redirect()->route('dashboard.findCode.index')->with('sukses', 'Berhasil Menghapus Data');
    }
}
