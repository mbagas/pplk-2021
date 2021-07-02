@extends('layouts.master')
@section('title', 'Tambah Kabinet')
@section('content')
<div class="col-xl-12 col-lg-12 form-wrapper">
  <h1 class="content-title">Masukkan Data Kabinet</h1>
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Kabinet</h4>
    </div>
    <div class="card-body">
      <div class="basic-form">
        <form method="POST" action="{{ route('dashboard.kabinet.store') }}" enctype="multipart/form-data">
        @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Kabinet</label>
            <div class="col-sm-9">
              <input type="text" name="nama" class="form-control" placeholder="Nama" id="nama"  required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Presiden</label>
            <div class="col-sm-9">
              <input type="text" name="presiden" class="form-control" placeholder="Presiden" id="presiden" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Sekjen</label>
            <div class="col-sm-9">
              <input type="text" name="sekjen" class="form-control" placeholder="Sekertaris Jenderal" id="sekjen" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Organigram</label>
            <div class="col-sm-9">
              <input type="file" name="organigram" class="form-control" placeholder="" id="organigram" multiple="multiple" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <div class="col-sm-9">
              <input type="file" name="logo" class="form-control" placeholder="" id="logo" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Filosofi Logo</label>
            <div class="col-sm-9">
              <input type="text" name="filosofiLogo" class="form-control" placeholder="Filosofi Logo" id="filosofiLogo" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" id="deskripsi" required>
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
