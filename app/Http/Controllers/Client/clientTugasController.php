<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Mengerjakan;
use App\Models\Tugas;
use Illuminate\Http\Request;

class clientTugasController extends Controller
{
    //
    public function index(){
        $dataTugas = Mengerjakan::with('tugas')->where('users_id', auth()->user()->id)->get();
        return view('client.tugas.tugas', compact('dataTugas'));
    }

    public function show($id){
        $tugasDetail = Tugas::where('id', $id)->firstOrFail();
        return view('client.tugas.tugasDetail', compact('tugasDetail'));
    }
}
