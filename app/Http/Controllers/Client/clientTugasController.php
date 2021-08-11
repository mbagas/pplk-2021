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
                    'file' => url($request->file('file')->move($tugasDetail->tugas->judul . '/kelompok' . $tugasDetail->users->kelompok,$tugasDetail->users->kelompok . '_' . $tugasDetail->users->nama . '_' . $tugasDetail->tugas->judul . '.' . $request->file('file')->extension())),
                    'status'  => 1
                ]);
            }

            if($request->jawaban){
                $tugasDetail->update([
                    'jawaban' => $request->jawaban,
                    'status'  => 1
                ]);
            }
        });
        return redirect()->route('tugasMaba.index')->with('sukses', 'Berhasil mengumpulkan tugas');
    }
}
