<?php

namespace App\Http\Controllers;
use App\Models\Kabinet;
use Exception;
use Illuminate\Http\Request;

class kabinetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result = Kabinet::all();

        return view('dashboard.content.Kabinet.Kabinet', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $result = Kabinet::get();
        $counts = Kabinet::count();

        if($counts == 1){
         $id = $result->first()->id;

         return redirect('dashboard/kabinet/' . $id . '/edit')->with('error', 'Data sudah tersedia!');
        }

        return view('dashboard.content.Kabinet.tambahKabinet',compact('result'));
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
            $namaFile = 'logoKabinet'.'.'.$request->logo->extension();
            $request->logo->storeAs(('kabinet'), $namaFile);
            $namaOrganigram = 'organigramKabinet'.'.'.$request->organigram->extension();
            $request->organigram->storeAs(('kabinet'), $namaOrganigram);

            $kabinet = new Kabinet();
            $kabinet->nama = $request->nama;
            $kabinet->presiden = $request->presiden;
            $kabinet->sekjen = $request->sekjen;
            $kabinet->organigram = 'kabinet/'.$namaOrganigram;
            $kabinet->logo = 'kabinet/'.$namaFile;
            $kabinet->filosofiLogo = $request->filosofiLogo;
            $kabinet->deskripsi = $request->deskripsi;
            $kabinet->save();
        }catch(Exception $ex){
            return $ex;
        }

        return redirect('dashboard/kabinet')->with('sukses','Berhasil Menambahkan Data!');
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
            $result = Kabinet::where('id', $id)->firstOrFail();
            return view('dashboard.content.Kabinet.updateKabinet',compact('result'));
        } catch(Exception $ex){
            return redirect('dashboard/kabinet')->with('error', 'Gagal Edit Data!');
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
            
            $kabinet = Kabinet::where('id', $id)->firstOrFail();
            $kabinet->nama = $request->nama;
            $kabinet->presiden = $request->presiden;
            $kabinet->sekjen = $request->sekjen;
            $kabinet->organigram = $request->organigram;
            if($request->organigram != NULL){
                $namaOrganigram = 'organigramKabinet'.'.'.$request->organigram->extension();
                $request->organigram->storeAs(('kabinet'), $namaOrganigram);
                $kabinet->organigram = 'kabinet/'.$namaOrganigram;
            }
            if($request->logo != NULL){
                $namaFile = 'logoKabinet'.'.'.$request->logo->extension();
                $request->logo->storeAs(('kabinet'), $namaFile);
                $kabinet->logo = 'kabinet/'.$namaFile;
            }
            $kabinet->filosofiLogo = $request->filosofiLogo;
            $kabinet->deskripsi = $request->deskripsi;
            $kabinet->save();
        }catch(Exception $ex){
            return redirect('dashboard/kabinet')->with('error', 'Gagal Edit Data!');
        }
        return redirect('dashboard/kabinet')->with('sukses', 'Berhasil Edit Data!');
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
        Kabinet::destroy($id);
        try{
            return redirect('dashboard/kabinet')->with('sukses', 'Berhasil Hapus Data!');
        } catch(Exception $ex){
            return redirect('dashboard/kabinet')->with('error', 'Gagal Hapus Data!');
        }
    }
}
