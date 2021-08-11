@extends('layouts.master')
@section('title', 'Tambah Tugas')
@section('content')
<div class="row form-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Tugas</h4>
      </div>
      <div class="card-body">
          @if(Auth::user()->roles_id == 2)
          <form method="POST" action="{{ route('dashboardTugas.tugas.store') }}" enctype="multipart/form-data">
              @else
        <form method="POST" action="{{ route('dashboard.tugas.store') }}" enctype="multipart/form-data">
            @endif
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
              <textarea type="number" name="deskripsi" class="form-control form-control-lg" required></textarea>
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
              <input type="file" name="fileTugas" class="form-control form-control-lg" required>
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
          <div id="parameter">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label col-form-label-lg">Parameter Nilai</label>
              <div class="col-sm-6">
                <input type="text" name="nama_params[]" class="form-control form-control-lg" placeholder="Nama Parameter" required>
              </div>
            
              <div class="col-sm-4">
                <input type="number" name="persen[]" class="form-control form-control-lg" placeholder="Persentase Parameter" required>
              </div>
            </div>
          </div>

          

          <div class="mb-3 row">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-danger" id="addParameter">Tambah Parameter</button>
          </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#addParameter").click(function(){
      $("#parameter").append('<div class="mb-3 row"><label class="col-sm-2 col-form-label col-form-label-lg">Parameter Nilai</label><div class="col-sm-6"><input type="text" name="nama_params[]" class="form-control form-control-lg" placeholder="Nama Parameter" required></div><div class="col-sm-4"><input type="number" name="persen[]" class="form-control form-control-lg" placeholder="Persentase Parameter" required></div></div>');
    });
  });
</script>
@endsection
