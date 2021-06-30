@extends('layouts.master')
@section('title', 'Update Data Senat')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Update Data Senat</h4>
      </div>
      <div class="card-body">
        @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        <form method="POST" action="{{ route('dashboard.senat.update', $result->id) }}">
          @method('PUT')
          @csrf
          <input name="id" value="{{ $result->id }}" type="hidden">
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Ketua</label>
            <div class="col-sm-10">
              <input type="text" name="ketua" class="form-control  " value="{{ $result->ketua }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
              <input type="text" name="deskripsi" class="form-control  " value="{{ $result->deskripsi }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Website</label>
            <div class="col-sm-10">
              <input type="text" name="website" class="form-control  " value="{{ $result->website }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Youtube</label>
            <div class="col-sm-10">
              <input type="text" name="youtube" class="form-control  " value="{{ $result->youtube }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Instagram</label>
            <div class="col-sm-10">
              <input type="text" name="instagram" class="form-control  " value="{{ $result->instagram }}" required>
            </div>
          </div>


          <button type="submit" class="btn btn-lg btn-primary">Update</button>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
