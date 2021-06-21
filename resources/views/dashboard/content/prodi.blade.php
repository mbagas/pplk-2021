@extends('layouts.master')
@section('title', 'Data Prodi')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Prodi</h4>
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
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>Nama Singkat</strong></th>
                                    <th class="text-center"><strong>Nama Lengkap</strong></th>
                                    <th class="text-center"><strong>Kepala Prodi</strong></th>
                                    <th class="text-center"><strong>Akreditasi</strong></th>
                                    <th class="text-center"><strong>Jumlah Mahasiswa</strong></th>
                                    <th class="text-center"><strong>ACTION</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $data )
                                    <tr>
                                        <td class="text-center">{{$data->ormawas->namaSingkat}}</td>
                                        <td class="text-center">{{$data->ormawas->namaLengkap}}</td>
                                        <td class="text-center">{{$data->kepalaProdi}}</td>
                                        <td class="text-center">{{$data->akreditasi}}</td>
                                        <td class="text-center">{{$data->jumlahMahaSiswa}}</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </button>
                                                <div class="dropdown-menu" style="margin: 0px;">
                                                    <a class="dropdown-item" href="prodi/edit/{{ $data->ormawas->id }}">Edit</a>
                                                    <a class="dropdown-item" href="prodi/delete/{{ $data->ormawas->id }}">Hapus</a>
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
    </div>
    
@endsection