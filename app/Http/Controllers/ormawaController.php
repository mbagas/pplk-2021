<?php

namespace App\Http\Controllers;

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
        $user = Auth::user();
        $ormawa = Ormawa::where('namaSingkat', $user->nama)->firstOrFail();
        $id = $ormawa->id;
        $kategori = $ormawa->kategoris_id;
        if($kategori == '1'){
            try{
                
                $jurusans = Jurusan::get();
                $result = Prodi::with('ormawas',)->where('ormawas_id', $id)->firstOrFail();
                $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();
                $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
                $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
                return view('dashboard.content.Prodi.updateProdi', compact('result', 'artikel', 'jurusans', 'socialMedia', 'visiMisi'));
            } catch(Exception $ex){
                return redirect('dashboard/prodi')->with('error', 'Gagal Menyunting Data!');
            }
        }
        elseif($kategori == '2'){
            try {
                $himpunan = Himpunan::with('ormawas')->where('ormawas_id', $id)->firstOrFail();
                $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
                $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
                $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();
        
                return view('dashboard.content.Himpunan.updateHimpunan', compact('himpunan', 'socialMedia', 'visiMisi', 'artikel'));
              } catch (Exception $ex) {
                return redirect('dashboard/himpunan')->with('error', 'Gagal Menyunting Data!');
              }
        }
        elseif($kategori == '3'){
            try{
                $result = Ukm::with('ormawas')->where('ormawas_id', $id)->firstOrFail();
                $artikel = Artikel::where('ormawas_id', $id)->firstOrFail();
                $socialMedia = SocialMedia::where('ormawas_id', $id)->firstOrFail();
                $visiMisi = VisiMisi::where('ormawas_id', $id)->firstOrFail();
                return view('dashboard.content.Ukm.updateUkm', compact('result', 'artikel', 'socialMedia', 'visiMisi'));
            } catch(Exception $ex){
                return redirect('dashboard/ukm')->with('error', 'Gagal Menyunting Data!');
            }
        }
    }
}
