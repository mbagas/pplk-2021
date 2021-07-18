<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Prodi;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->roles_id == 3){
            $kelompok = $user->kelompok;
            $users = User::where('kelompok', $kelompok)->get();
            return view('dashboard.content.User.index', compact('users'));
        }
        
        $users = User::all();
        return view('dashboard.content.User.index', compact('users'));
    }

    public function create(){
        $prodis = Prodi::with('ormawas')->get();
        if(Auth::user()->roles_id == 1){
            $roles = Role::all();
        } else{
            $roles = Role::where('id', 5)->get();
            $kelompok = Auth::user()->kelompok;
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
        return redirect('dashboard/user')->with('sukses', 'Sukses Menambahkan User!');
    }

    public function edit($id){
        $userData = User::with('roles', 'prodis')->where('id', $id)->firstOrFail();
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

        if(Auth::user()->roles_id == 3){
            return redirect('dashboardDaplokMentor/user')->with('sukses', 'Sukses Update User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Update User!');
    }

    public function destroy($id){
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();
        if(Auth::user()->roles_id == 3){
            return redirect('dashboardDaplokMentor/user')->with('sukses', 'Sukses Hapus User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Hapus User!');
    }
}
