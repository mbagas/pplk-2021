<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        if($user->roles_id == 3){
            $kelompok = $user->kelompok;
            $result = User::where('kelompok', $kelompok)->get();
            return view('dashboard.content.User.user', compact('result'));
        }
        
        $result = User::all();
        return view('dashboard.content.User.user', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prodi = Prodi::with('ormawas')->get();
        if(Auth::user()->roles_id == 1){
            $role = Role::all();
        } else{
            $role = Role::where('id', 5)->get();
            $kelompok = Auth::user()->kelompok;
            return view('dashboard.content.User.tambahUser', compact('prodi', 'role', 'kelompok'));
        }
        
        return view('dashboard.content.User.tambahUser', compact('prodi', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            $user = new User();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles_id = $request->roles_id;
            $user->nim = $request->nim;
            $user->kelompok = $request->kelompok;
            $user->prodis_id = $request->prodis_id;
            $user->instagram = $request->instagram;
            $user->save();

        } catch(Exception $ex){
            if(Auth::user()->roles_id == 3){
                return redirect('dashboardDaplokMentor/user')->with('error', 'Gagal Menambahkan User!');
            }
            return redirect('dashboard/user')->with('error', 'Gagal Menambahkan User!');
        }
        if(Auth::user()->roles_id == 3){
            return redirect('dashboardDaplokMentor/user')->with('sukses', 'Sukses Menambahkan User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Menambahkan User!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try{
            $result = User::with('roles', 'prodis')->where('id', $id)->firstOrFail();
            if($result->prodis_id !== NULL){
                $namaProdi = Prodi::with('ormawas')->where('id', $result->prodis_id)->firstOrFail();
                $result->namaProdi = $namaProdi->ormawas->namaLengkap;
            } else{
                $result->namaProdi = '';
            }
            
            $role = Role::get();
            $prodi = Prodi::with('ormawas')->get();
            
            return view('dashboard.content.User.updateUser', compact('result', 'role', 'prodi'));
        } catch(Exception $ex){
            // return redirect('dashboard/user')->with('error', 'Gagal Edit Data!');
            var_dump($result->prodis_id);
            return $ex;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $user = User::where('id', $id)->firstOrFail();
            $user->nama = $request->nama;
            $user->email = $request->email;
            if($request->password !== $user->password){
                $user->password = Hash::make($request->password);
            }
            $user->roles_id = $request->roles_id;
            $user->nim = $request->nim;
            $user->kelompok = $request->kelompok;
            $user->prodis_id = $request->prodis_id;
            $user->instagram = $request->instagram;
            $user->save();
        } catch(Exception $ex){
            if(Auth::user()->roles_id == 3){
                return redirect('dashboardDaplokMentor/user')->with('error', 'Gagal Update User!');
            }
            return redirect('dashboard/user')->with('error', 'Gagal Update User!');
        }
        if(Auth::user()->roles_id == 3){
            return redirect('dashboardDaplokMentor/user')->with('sukses', 'Sukses Update User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Update User!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = User::where('id', $id)->firstOrFail();
            $user->delete();
        } catch(Exception $ex){
            if(Auth::user()->roles_id == 3){
                return redirect('dashboardDaplokMentor/user')->with('error', 'Gagal Hapus User!');
            }
            return redirect('dashboard/user')->with('error', 'Gagal Hapus User!');
        }
        if(Auth::user()->roles_id == 3){
            return redirect('dashboardDaplokMentor/user')->with('sukses', 'Sukses Hapus User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Hapus User!');
    }
}
