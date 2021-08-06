<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ormawa;
use App\Models\Prodi;
use App\Models\Ukm;
use App\Models\Himpunan;
use App\Models\SocialMedia;
use App\Models\VisiMisi;
use App\Models\Artikel;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ormawaController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $ormawa = Ormawa::where('namaSingkat', $user->nama)->firstOrFail();
        $id = $ormawa->id;
        $kategori = $ormawa->kategoris_id;
        if($kategori == '1'){
            $jurusans = Jurusan::get();
            $prodiData = Prodi::with('ormawas',)->where('ormawas_id', $id)->firstOrFail();
            return view('dashboard.content.Prodi.edit', compact('prodiData', 'jurusans'));
        }
        elseif($kategori == '2'){
            $himpunan = $ormawa;
            $dataHimpunan = Himpunan::with('ormawas')->where('ormawas_id', $id)->firstOrFail();
            return view('dashboard.content.Himpunan.edit', compact('dataHimpunan', 'himpunan'));

        }
        elseif($kategori == '3'){
            $ukm = $ormawa;
            $ukmData = Ukm::with('ormawas')->where('ormawas_id', $id)->firstOrFail();
            return view('dashboard.content.Ukm.edit', compact('ukmData','ukm'));

        }
    }
}
