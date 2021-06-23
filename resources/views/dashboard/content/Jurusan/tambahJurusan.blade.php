@extends('layouts.master')
@section('title', 'Tambah Himpunan')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Himpunan</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('dashboard.jurusan.store') }}">
          @csrf
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" name="namaLengkap" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Singkat</label>
            <div class="col-sm-10">
              <input type="text" name="namaSingkat" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Kepala Jurusan</label>
            <div class="col-sm-10">
              <input type="text" name="kepalaJurusan" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Ruang Jurusan</label>
            <div class="col-sm-10">
              <input type="text" name="ruangJurusan" class="form-control form-control-lg" required>
            </div>
          </div>
          
          <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
