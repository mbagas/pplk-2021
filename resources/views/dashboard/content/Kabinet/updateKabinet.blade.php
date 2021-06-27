@extends('layouts.master')
@section('title', 'Update Data Kabinet')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Update Data Kabinet</h4>
      </div>
      <div class="card-body">
        @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        <form method="POST" action="{{ route('dashboard.kabinet.update', $result->id) }}" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <input name="id" value="{{ $result->id }}" type="hidden">
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Kabinet</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control form-control-lg" value="{{ $result->nama }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Presiden</label>
            <div class="col-sm-10">
              <input type="text" name="presiden" class="form-control form-control-lg" value="{{ $result->presiden }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Sekjen</label>
            <div class="col-sm-10">
              <input type="text" name="sekjen" class="form-control form-control-lg" value="{{ $result->sekjen }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Organigram</label>
            <div class="col-sm-10">
              <input type="file" name="organigram" class="form-control form-control-lg" value="{{ $result->organigram }}">
            </div>
          </div>          
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Logo</label>
            <div class="col-sm-10">
              <input type="file" name="logo" class="form-control form-control-lg" value="{{ $result->logo }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Filosofi Logo</label>
            <div class="col-sm-10">
              <input type="text" name="filosofiLogo" class="form-control form-control-lg" value="{{ $result->filosofiLogo }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
              <input type="text" name="deskripsi" class="form-control form-control-lg" value="{{ $result->deskripsi }}" required>
            </div>
          </div>


          <button type="submit" class="btn btn-lg btn-primary">Update</button>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
