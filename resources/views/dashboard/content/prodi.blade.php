@extends('layouts.master')
@section('title', 'Data Prodi')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Prodi</h4>
                    <button type="button" class="btn btn-rounded btn-dark pull-right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                    </span>Tambah Prodi</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form action="{{ route('storeProdi')}}" method="POST" onsubmit="">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">TAMBAH PRODI</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Nama Lengkap</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control form-control-lg" value="" placeholder="Teknik Informatika" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Nama Singkat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="namaSingkat" class="form-control form-control-lg" value="" placeholder="IF" required>
                                                </div>
                                            </div>
                                        
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Jurusan</label>
                                                <div class="col-sm-10">
                                                    <select name="jurusan" class="nice-select default-select form-control wide mb-3" tabindex="0" required>
                                                        @foreach ($jurusans as $data)
                                                        <option value="{{ $data->id }}">{{ $data->namaLengkap}} ({{ $data->namaSingkat }})</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Kepala Prodi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="kepalaProdi" class="form-control form-control-lg" value="" placeholder="Naufal Taufiq Ridwan Es Doger" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Akreditasi Prodi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="akreditasi" class="form-control form-control-lg" value="" placeholder="A" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Ruang Prodi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="ruangProdi" class="form-control form-control-lg" value="" placeholder="E123" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Tahun Berdiri</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="tahunBerdiri" class="form-control form-control-lg" value="" placeholder="2015" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Jumlah Mahasiswa</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="jumlahMahasiswa" class="form-control form-control-lg" value="" placeholder="3017" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" name="artikel" class="form-control form-control-lg" value="" placeholder="Teknik Informatika adalah . . ." required></textarea>
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
                                    <th style="width:80px;"><strong>Kode</strong></th>
                                    <th class="text-center"><strong>Nama Singkat</strong></th>
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
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
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