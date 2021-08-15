<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\client\ReportStoreRequest;
use App\Models\ReportPage;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function index(){
        return view('client.reportPage');
    }

    public function store(ReportStoreRequest $request){
        ReportPage::create($request->validated() + [
            'nama'        => $request->nama,
            'nim'         => $request->nim,
            'kontak'      => $request->kontak,
            'instagram'   => $request->instagram,
            'kritikSaran' => $request->kritikSaran
        ]);

        return redirect('report')->with('sukses', 'sukses bosku!');
    }
}
