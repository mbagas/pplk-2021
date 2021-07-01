@extends('layouts.master')
@section('title', 'Tugas')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tugas</h4>
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
        <form method="POST" action="{{ route('dashboard.maba.update', $tugas->id) }}" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" value="{{$tugas->judul}}" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
              <textarea type="numeric" class="form-control form-control-lg" readonly>{{$tugas->deskripsi}}</textarea>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Format Penamaan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" value="{{$tugas->format}}" readonly>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Start Time</label>
            <div class="col-sm-10">
              {{$tugas->start_time}}
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">End Time</label>
            <div class="col-sm-10">
              {{$tugas->end_time}}
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">File</label>
            <div class="col-sm-10">
              <input type="file" name="file" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Jawaban</label>
            <div class="col-sm-10">
              <textarea type="numeric" name="jawaban" class="form-control form-control-lg" required>{{$submission->jawaban}}</textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-lg btn-primary">Submit</button>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
