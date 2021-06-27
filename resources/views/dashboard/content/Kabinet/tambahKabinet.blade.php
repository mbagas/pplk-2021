@extends('layouts.master')
@section('title', 'Tambah Kabinet')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data Kabinet</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('dashboard.kabinet.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Kabinet</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control form-control-lg" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Presiden</label>
            <div class="col-sm-10">
              <input type="text" name="presiden" class="form-control form-control-lg" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Sekjen</label>
            <div class="col-sm-10">
              <input type="text" name="sekjen" class="form-control form-control-lg">
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Organigram</label>
            <div class="col-sm-10">
              <input type="file" name="organigram" class="form-control form-control-lg" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Logo</label>
            <div class="col-sm-10">
                <input type="file" name="logo" class="form-control form-control-lg" required>
            </div>
            </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Filosofi Logo</label>
            <div class="col-sm-10">
              <input type="text" name="filosofiLogo" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
              <input type="text" name="deskripsi" class="form-control form-control-lg" required>
            </div>
          </div>

          <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

        </form>

      </div>
    </div>
  </div>
</div>
</div>

@endsection
