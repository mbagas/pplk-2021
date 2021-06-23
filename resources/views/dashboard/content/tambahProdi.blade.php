@extends('layouts.master')
@section('title', 'Tambah Prodi')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Prodi</h4>
                </div>
                <div class="card-body">

                    @if($errors->any())
                        @foreach($errors->all() as $data)
                            <div class="alert alert-danger">
                                {{ $data }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('storeProdi') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama Singkat</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaSingkat" class="form-control form-control-lg" required>
                        </div>
                        </div>
                    
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Jurusan</label>
                        <div class="col-sm-10">
                            <select name="jurusan" class="nice-select default-select form-control wide mb-3" tabindex="0" required>
                                <option>Pilih Jurusan</option>
                                @foreach ($jurusans as $data)
                                <option value="{{ $data->id }}">{{ $data->namaLengkap}} ({{ $data->namaSingkat }})</option>
                                @endforeach
                                
                            </select>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Kepala Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="kepalaProdi" class="form-control form-control-lg"required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Akreditasi Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="akreditasi" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Ruang Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" name="ruangProdi" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tahun Berdiri</label>
                        <div class="col-sm-10">
                            <input type="number" name="tahunBerdiri" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Jumlah Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="number" name="jumlahMahasiswa" class="form-control form-control-lg" required>
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
                                <input type="text" name="website" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" name="youtube" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Visi</label>
                            <div class="col-sm-10">
                                <input type="text" name="visi" class="form-control form-control-lg" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Misi</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="misi" class="form-control form-control-lg" required></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="artikel" class="form-control form-control-lg" required></textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
@endsection