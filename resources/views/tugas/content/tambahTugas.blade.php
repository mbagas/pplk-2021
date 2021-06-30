@extends('layouts.master')
@section('title', 'Tambah Tugas')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Tugas</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('dashboard.tugas.store') }}" enctype='multipart/form-data'>
          @csrf
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Judul</label>
            <div class="col-sm-10">
              <input type="text" name="judul" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
              <textarea type="numeric" name="deskripsi" class="form-control form-control-lg" required></textarea>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Format Penamaan</label>
            <div class="col-sm-10">
              <input type="text" name="format" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">File</label>
            <div class="col-sm-10">
              <input type="file" name="file" class="form-control form-control-lg">
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Start Time</label>
            <div class="col-sm-10">
              <input type="datetime-local" name="start_time" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">End Time</label>
            <div class="col-sm-10">
              <input type="datetime-local" name="end_time" class="form-control form-control-lg" required>
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
