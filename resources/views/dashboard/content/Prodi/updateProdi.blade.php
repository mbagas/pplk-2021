@extends('layouts.master')
@section('title', 'Update Prodi')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Prodi</h4>
                </div>
                <div class="card-body">
                @if (Auth::user()->roles_id == '1')
                    <form method="POST" action="{{ route('dashboard.prodi.update',$result->ormawas->id) }}" enctype="multipart/form-data">
                @else
                    <form method="POST" action="{{ route('dashboardOrmawa.prodi.update',$result->ormawas->id) }}" enctype="multipart/form-data">
                @endif
                        @method('PUT')
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control form-control-lg" value="{{ $result->ormawas->namaLengkap }}" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama Singkat</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaSingkat" class="form-control form-control-lg" value="{{ $result->ormawas->namaSingkat }}" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Jurusan</label>
                        <div class="col-sm-10">
                            <select name="jurusan" class="nice-select default-select form-control wide mb-3" tabindex="0" required>
                                <option value="{{ $result->jurusans->id }}">{{ $result->jurusans->namaLengkap }} ({{ $result->jurusans->namaSingkat }})</option>
                                @foreach ($jurusans as $data)
                                <option value="{{ $data->id }}">{{ $data->namaLengkap}} ({{ $data->namaSingkat }})</option>
                                @endforeach

                            </select>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Kepala Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="kepalaProdi" class="form-control form-control-lg" value="{{ $result->kepalaProdi }}" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Akreditasi Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="akreditasi" class="form-control form-control-lg" value="{{ $result->akreditasi }}" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Ruang Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="ruangProdi" class="form-control form-control-lg" value="{{ $result->ruangProdi }}" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tahun Berdiri</label>
                        <div class="col-sm-10">
                            <input type="number" name="tahunBerdiri" class="form-control form-control-lg" value="{{ $result->tahunBerdiri }}" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Jumlah Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="number" name="jumlahMahasiswa" class="form-control form-control-lg" value="{{ $result->jumlahMahaSiswa }}" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Diagram Alir</label>
                            <div class="col-sm-10">
                                <input type="file" name="diagramAlir" class="form-control form-control-lg" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Website</label>
                            <div class="col-sm-10">
                                <input type="text" name="website" class="form-control form-control-lg" value="{{ $socialMedia->website }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" name="youtube" class="form-control form-control-lg" value="{{ $socialMedia->youtube }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" class="form-control form-control-lg" value="{{ $socialMedia->instagram }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Visi</label>
                            <div class="col-sm-10">
                                <input type="text" name="visi" class="form-control form-control-lg" value="{{ $visiMisi->visi }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Misi</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="misi" class="form-control form-control-lg" value="{{ $visiMisi->misi }}" required></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="artikel" class="form-control form-control-lg" required>{{ $artikel->body }}</textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
