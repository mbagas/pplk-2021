<?php

namespace App\Http\Controllers;

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
        $result = User::paginate(10);
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
        $role = Role::all();
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
            return redirect('dashboard/user')->with('error', 'Gagal Menambahkan User!');
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
            $role = Role::get();
            $prodi = Prodi::with('ormawas')->get();
            return view('dashboard.content.User.updateUser', compact('result', 'role', 'prodi'));
        } catch(Exception $ex){
            return redirect('dashboard/user')->with('error', 'Gagal Edit Data!');?
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
            return redirect('dashboard/user')->with('error', 'Gagal Hapus User!');
        }
        return redirect('dashboard/user')->with('sukses', 'Sukses Hapus User!');
    }
}
