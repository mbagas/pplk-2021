<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Mengerjakan;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientTugasController extends Controller
{
    //
    public function index(){
        $dataTugas = Mengerjakan::with('tugas')->where('users_id', auth()->user()->id)->get();
        return view('client.tugas.tugas', compact('dataTugas'));
    }

    public function show($id){
        $tugasDetail = Mengerjakan::with('tugas')->where('id', $id)->firstOrFail();
        return view('client.tugas.tugasDetail', compact('tugasDetail', 'id'));
    }

    public function update(Request $request, $id){
        $tugasDetail = Mengerjakan::with('tugas')->where('id', $id)->first();

        DB::transaction(function () use($request,$tugasDetail) {
            if($request->hasFile('file')){
                $tugasDetail->update([
                    'file' => url($request->file('file')->move('tugas/'.$tugasDetail->tugas->judul . '/kelompok' . $tugasDetail->users->kelompok,$tugasDetail->users->kelompok . '_' . $tugasDetail->users->nama . '_' . $tugasDetail->tugas->judul . '.' . $request->file('file')->extension()))
                ]);
            }

            if($request->jawaban){
                $tugasDetail->update([
                    'jawaban' => $request->jawaban
                ]);
            }

            if($request->has('stts')){
                $tugasDetail->update([
                    'status' => $request->stts
                ]);
            }

            if($request->hapusFile){
                $tugasDetail->update([
                    'file' => NULL
                ]);
            }

            if($request->hapusJawaban){
                $tugasDetail->update([
                    'jawaban' => NULL
                ]);
            }




        });
        return redirect()->route('tugasMaba.show', $id)->with('sukses', 'Berhasil mengumpulkan tugas');
    }
    
    public function turnin(Request $request, $id){
        $tugasDetail = Mengerjakan::where('id', $id)->first();
        DB::transaction(function () use($request,$tugasDetail) {
            $tugasDetail->update([
                'status' => $request->stts
            ]);
        });
    }
}
