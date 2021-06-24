<?php

namespace App\Http\Controllers;

use App\Models\Kamusgaul;
use Exception;
use Illuminate\Http\Request;

class kamusGaulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Kamusgaul::all();
        return view('dashboard.content.KamusGaul.kamusGaul', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.content.KamusGaul.tambahKamusGaul');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            $upt = new Kamusgaul();
            $upt->gaul = $request->gaul;
            $upt->asli = $request->asli;
            $upt->save();
        } catch(Exception $ex){
            return redirect('dashboard/kamusGaul')->with('error', 'Gagal Menambahkan Data!');
        }

        return redirect('dashboard/kamusGaul')->with('sukses', 'Berhasil Menambahkan Data!');

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
    public function edit($id)
    {
        //
        try{
            $result = Kamusgaul::where('id', $id)->firstOrFail();
            return view('dashboard.content.KamusGaul.updateKamusGaul', compact('result'));
        } catch(Exception $ex){
            return redirect('dashboard/kamusGaul')->with('error', 'Gagal Edit Data!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $id = $request->id;
            $upt = Kamusgaul::where('id', $id)->firstOrFail();
            $upt->gaul = $request->gaul;
            $upt->asli = $request->asli;
            $upt->save();

        } catch(Exception $ex){
            return redirect('dashboard/kamusGaul')->with('error', 'Gagal Edit Data!');
        }
        return redirect('dashboard/kamusGaul')->with('sukses', 'Berhasil Edit Data!');
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
        try{

            $prodi = Kamusgaul::where('id', $id)->first();
            $prodi->delete();
        } catch(Exception $ex){
            return redirect('dashboard/kamusGaul')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('dashboard/kamusGaul')->with('sukses', 'Berhasil Hapus Data!');
    }
}
