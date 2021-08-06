<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Prodi;
use App\Models\Role;
use App\Models\User;
use App\Models\Ormawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(){
        $user = auth()->user();
        if($user->roles_id == 3){
            $kelompok = $user->kelompok;
            $users = User::with('roles')->where('kelompok', $kelompok)->get();

            return view('dashboard.content.User.index', compact('users'));
        }
        else{
        $users =  User::with('roles')->get();
        return view('dashboard.content.User.index', compact('users'));
        }
    }

    public function create(){
        $prodis = Prodi::with('ormawas')->get();
        if(auth()->user()->roles_id == 1){
            $roles = Role::all();
        } else{
            $roles = Role::where('id', 5)->get();
            $kelompok = auth()->user()->kelompok;
            return view('dashboard.content.User.create', compact('prodis', 'roles', 'kelompok'));
        }
        
        return view('dashboard.content.User.create', compact('prodis', 'roles'));
    }

    public function store(UserStoreRequest $request){
        $user = User::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'roles_id'  => $request->roles_id,
            'kelompok'  => $request->kelompok,
            'nim'       => $request->nim,
            'instagram' => $request->instagram,
            'prodis_id' => $request->prodis_id
        ]);
        if(auth()->user()->roles_id == 1){
            return redirect()->route('dashboard.user.index')->with('sukses', 'Sukses Menambahkan User!');
        }
        else{
            return redirect()->route('dashboardDaplokMentor.user.index')->with('sukses', 'Sukses Menambahkan User!');
        }
        
    }

    public function edit($id){
        $userData = User::with('roles', 'prodis')->where('id', $id)->firstOrFail();
        if($userData->prodis_id != NULL){
            $prodi = Prodi::with('ormawas')->where('id', $userData->prodis_id)->first();
            $ormawa = Ormawa::where('id', $prodi->ormawas_id)->first();
            $userData->namaProdi = $ormawa->namaLengkap;
        }
        
        $prodis = Prodi::all();
        $roles = Role::all();

        return view('dashboard.content.User.edit', compact('userData', 'roles', 'prodis'));

    }

    public function update(UserUpdateRequest $request, $id){
        $userData = User::where('id', $id)->first();
        $userData->update([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'roles_id'  => $request->roles_id,
            'kelompok'  => $request->kelompok,
            'nim'       => $request->nim,
            'instagram' => $request->instagram,
            'prodis_id' => $request->prodis_id
        ]);
        if($request->has('password')){
            $userData->update(['password'  => bcrypt($request->password)]);
        }

        if(auth()->user()->roles_id == 3){
            return redirect('dashboardDaplokMentor/user')->with('sukses', 'Sukses Update User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Update User!');
    }

    public function destroy($id){
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();
        if(auth()->user()->roles_id == 3){
            return redirect('dashboardDaplokMentor/user')->with('sukses', 'Sukses Hapus User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Hapus User!');
    }
}
