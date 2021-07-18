@extends('layouts.master')
@section('title', 'Tugas Details')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tugas Details</h4>
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
        <a class="dropdown-item" href="{{route('dashboard.tugas.edit', $tugas->id)}}">Edit</a>
        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label col-form-label-lg">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" value="{{$tugas->judul}}" readonly>
          </div>
        </div>

        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control form-control-lg" readonly>{{$tugas->deskripsi}}</textarea>
          </div>
        </div>

        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label col-form-label-lg">File</label>
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
            <input type="text" class="form-control form-control-lg" value="{{$tugas->start_time}}" readonly>
          </div>
        </div>

        <div class="mb-3 row">
          <label class="col-sm-2 col-form-label col-form-label-lg">End Time</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" value="{{$tugas->end_time}}" readonly>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
