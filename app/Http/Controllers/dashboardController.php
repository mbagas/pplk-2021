<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::with('roles', 'prodis')->where('id', Auth::user()->id)->firstOrFail();
        $prodi = Prodi::with('ormawas')->firstorFail();
        $result = [
            'nama' => $user->nama,
            'email' => $user->email,
            'nim' => $user->nim,
            'prodis' => $prodi->ormawas->namaLengkap
            
        ];
        return view('dashboard.index', compact('result'));
    }
}
