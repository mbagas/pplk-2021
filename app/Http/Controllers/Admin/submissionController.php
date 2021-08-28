<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use App\Models\Mengerjakan;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class submissionController extends Controller
{
    //
    

    public function index(){
        $tugass = Tugas::all();
        return view('tugas.content.submissionSelection', compact('tugass'));
        
    }

    public function submissionSelection($id){

        if(auth()->user()->roles_id == 3){
            $submissions = Mengerjakan::with('users', 'tugas')->where('kelompok', auth()->user()->kelompok)->orderBy('tugas_id', 'ASC')->get();
        }else{
            $submissions = Mengerjakan::with('users', 'tugas')->where('tugas_id', $id)->orderBy('tugas_id', 'ASC')->get();
        }
        
        return view('tugas.content.submissions', compact('submissions'));
    }

    public function show($id){
        $submission = Mengerjakan::with('users')->where('id', $id)->firstOrFail();
        $tugasId = $submission->tugas_id;
        $tugas = Tugas::where('id', $tugasId)->first();
        $parameters = Parameter::where('tugas_id', $tugasId)->get();
        return view('tugas.content.nilai', compact('submission', 'parameters', 'tugas'));
    }

    public function update(Request $request, $id){
        $submission = Mengerjakan::with('users')->where('id', $id)->firstOrFail();
        $submission->update(['nilai' => $request->nilai, 'status' => 1]);
        if(auth()->user()->roles_id == 2){
            return redirect()->route('dashboardTugas.submissions.index')->with('sukses', 'Berhasil Menilai Tugas!');
        }
        return redirect()->route('dashboard.submissions.index')->with('sukses', 'Berhasil Menilai Tugas!');
    }

}
