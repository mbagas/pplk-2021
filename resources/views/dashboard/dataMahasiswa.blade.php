@extends('layouts.master')
@section('title', 'Data Mahasiswa')
@section('content')
    <div class="row form-wrapper">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Mahasiswa</h4>
                    <button type="button" class="btn btn-rounded btn-dark pull-right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                    </span>Tambah Mahasiswa</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form action="{{ route('create') }}" method="POST" onsubmit="">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">TAMBAH MAHASISWA</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control  " value="" placeholder="Naufal Taufiq Ridwan" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" class="form-control  " value="" placeholder="pplk@student.itera.ac.id" required>
                                                </div>
                                            </div>
                                        
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Kelompok</label>
                                                <div class="col-sm-10">
                                                    <select name="kelompok" class="nice-select default-select form-control wide mb-3" tabindex="0" required>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Role</label>
                                                <div class="col-sm-10">
                                                    <select name="role" class="nice-select default-select form-control wide mb-3" tabindex="0" required>
                                                        <option value="1">Admin</option>
                                                        <option value="2">MABA</option>
                                                        <option value="3">DAPLOK/MENTOR</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Passsword</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="password" class="form-control  " value="" placeholder="********" required>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-danger light">Reset</button>
                                        <button type="submit" class="btn btn-primary" onclick="">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th class="text-center"><strong>NAMA</strong></th>
                                    <th class="text-center"><strong>EMAIL</strong></th>
                                    <th class="text-center"><strong>ROLE</strong></th>
                                    <th class="text-center"><strong>KELOMPOK</strong></th>
                                    <th class="text-center"><strong>ACTION</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $data )
                                    <tr>
                                        <td><strong>{{ $data->id }}</strong></td>
                                        <td class="text-center">{{$data->nama}}</td>
                                        <td class="text-center">{{$data->email}}</td>
                                        <td class="text-center">{{$data->role}}</td>
                                        <td class="text-center">{{$data->kelompok}}</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </button>
                                                <div class="dropdown-menu" style="margin: 0px;">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function kirim(){
            var nama = $("#nama").val();
            var email = $("#email").val();
            var kelompok = $("#kelompok").val();
            var role = $("#role");
            var password = $("#password").val();
            var _token = $("input[name=_token]").val();
        }
    </script>
@endsection