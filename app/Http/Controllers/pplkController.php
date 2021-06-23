<?php

namespace App\Http\Controllers;

use App\Models\Pplk;
use Exception;
use Illuminate\Http\Request;

class pplkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pplks = Pplk::all();
        return view('dashboard.content.pplk', compact('pplks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pplks = Pplk::get();
        return view('dashboard.content.tambahPPLK', compact('pplks'));
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
            $pplks = new Pplk();
            $pplks->logo = $request->logo;
            $pplks->visi = $request->visi;
            $pplks->misi = $request->misi;
            $pplks->save();

        } catch(Exception $ex){
            return redirect('dashboard/pplk')->with('error', 'Gagal Menambahkan Data!');
        }

        return redirect('dashboard/pplk')->with('sukses', 'Sukses menambah Data!');    
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
    // masih belum benerr editnya
    public function edit($id)
    {
        //
        $pplks = Pplk::where('id', $id)->firstOrFail();
        return view('dashboard.content.updatePPLK', compact('pplks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        try{
            $id = $request->id;
            $pplks = Pplk::where('id', $id)->firstOrFail();
            $pplks->logo = $request->logo;
            $pplks->visi = $request->visi;
            $pplks->misi = $request->misi;
            $pplks->save();
        } catch(Exception $ex){
            return redirect('dashboard/pplk')->with('error', 'Gagal Edit Data!');
        }
        return redirect('dashboard/pplk')->with('sukses', 'Berhasil Edit Data!');

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
            $pplks = Pplk::where('id', $id)->first();
            $pplks->delete();
        }
        catch(Exception $ex){
            return redirect('dashboard/pplk')->with('error', 'Gagal Hapus Data!');
        }
        return redirect('dashboard/pplk')->with('sukses', 'Berhasil Hapus Data!');
    }
}
