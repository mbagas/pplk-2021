@extends('layouts.master')
@section('title', 'Update Jurusan')
@section('content')
<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui Jurusan</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Jurusan</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form form method="POST" action="{{ route('dashboard.jurusan.update', $result->id) }}" enctype='multipart/form-data'>
                  @method('PUT')
                  @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                          <input type="text" name="namaLengkap" class="form-control form-control-lg" value="{{ $result->namaLengkap }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Singkat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" value="{{ $result->namaSingkat }}"required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Kepala Jurusan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Kepala Jurusan" name="kepalaJurusan" id="kepalaJurusan"  value="{{ $result->kepalaJurusan }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Ruang Jurusan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Ruang Jurusan" name="ruangJurusan" id="ruangJurusan"  value="{{ $result->ruangJurusan }}" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary ">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
