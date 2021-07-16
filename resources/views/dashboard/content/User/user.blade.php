@extends('layouts.master')
@section('title', 'Data User')
@section('content')

        <div class="col-lg-12 col-lg-12 form-wrapper">
            <h1 class="content-title">Kelola Data User</h1>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data User</h4>
                </div>
                <div class="card-body">
                    @if (session('sukses'))
                        <div class="alert alert-success">
                            {{ session('sukses') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <table id="example4" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Kelompok</th>
                                    <th>NIM</th>
                                    <th>Role</th>
                                    <th>Instagram</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $data )
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->kelompok}}</td>
                                        <td>{{$data->nim}}</td>
                                        <td>{{$data->roles->role}}</td>
                                        <td>{{$data->instagram}}</td>
                                        <td class="manage-row">
                                            @if (Auth::user()->roles_id == '1')
                                                <a href="{{route('dashboard.user.edit', $data->id)}}" class="edit-button">
                                            @else
                                                <a href="{{route('dashboardDaplokMentor.user.edit', $data->id)}}" class="edit-button">
                                            @endif
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            
                                            <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$data->id}}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <div class="modal fade bd-example-modal-sm{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                                        <div class="modal-footer">
                                                    @if (Auth::user()->roles_id == '1')
                                                        <form action="{{route('dashboard.user.destroy', $data->id)}}" method="POST">
                                                    @else
                                                        <form action="{{route('dashboardDaplokMentor.user.destroy', $data->id)}}" method="POST">
                                                    @endif
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{-- link paginate --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    

@endsection
