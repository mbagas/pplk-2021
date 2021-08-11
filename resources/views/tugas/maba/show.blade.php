@extends('layouts.master')
@section('title', 'Detail Pengerjaan')
@section('content')
<div class="row form-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Detail Pengerjaan</h4>
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
        @if (new DateTime() < new DateTime($tugas->end_time) && !$submission->status)
          <a class="dropdown-item" href="{{route('dashboard.maba.edit', $tugas->id)}}">Edit</a>
          @endif
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
            <label class="col-sm-2 col-form-label col-form-label-lg">Tugas</label>
            <div class="col-sm-10">
              <a href="{{route('dashboard.file.Download', ['Tugas', $tugas->file])}}">{{$tugas->file}}</a>
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
              <input type="text" class="form-control form-control-lg" value="{{$submission->file}}" readonly>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Jawaban</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control form-control-lg" readonly>{{$submission->jawaban}}</textarea>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nilai</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" value="{{$submission->nilai}}" readonly />
            </div>
          </div>

      </div>
    </div>
  </div>
</div>

@endsection
