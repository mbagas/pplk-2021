@extends('layouts.master')
@section('title', 'Update Data Kabinet')
@section('content')
  <div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui Kabinet</h1>
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Kabinet</h4>
      </div>
      <div class="card-body">
        @if($errors->any())
          @foreach($errors->all() as $data)
            <div class="alert alert-danger">
              {{ $data }}
            </div>
          @endforeach
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        <form method="POST" action="{{ route('dashboard.kabinet.update', $kabinet) }}" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <input name="id" value="{{ $kabinet->id }}" type="hidden">
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Kabinet</label>
            <div class="col-sm-9">
              <input type="text" name="nama" class="form-control" id="nama" value="{{ $kabinet->nama }}" required disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Presiden</label>
            <div class="col-sm-9">
              <input type="text" name="presiden" class="form-control" id="presiden" value="{{ $kabinet->presiden }}" required disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Sekjen</label>
            <div class="col-sm-9">
              <input type="text" name="sekjen" class="form-control" id="sekjen" value="{{ $kabinet->sekjen }}" required disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Organigram</label>
            <img class="img-thumbnail w-25" src="{{ $kabinet->organigram ?? asset('assets/images/LogoItera.png') }}" alt="" height="300" width="300">

            <div class="col-sm-6">
              <input type="file" accept="image/*" name="organigram" class="form-control" id="organigram" value="{{ $kabinet->organigram }}" required disabled>
            </div>
          </div>          
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <img class="img-thumbnail w-25" src="{{ $kabinet->logo ?? asset('assets/images/LogoItera.png') }}" alt="" height="300" width="300">
            <div class="col-sm-6">
              <input type="file" accept="image/*" name="logo" class="form-control" id="logo" value="{{ $kabinet->logo }}" required disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Filosofi Logo</label>
            <div class="col-sm-9">
              <input type="text" name="filosofiLogo" class="form-control" id="filosofiLogo" value="{{ $kabinet->filosofiLogo }}" required disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" name="deskripsi" id="deskripsi" required disabled>{{ $kabinet->deskripsi }}</textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary " >Simpan</button>
              <button type="button" class="btn btn-outline-primary " onclick="editData()">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script>
    function editData() {   
        document.getElementById('nama').disabled = false;
        document.getElementById('presiden').disabled = false;
        document.getElementById('sekjen').disabled = false;
        document.getElementById('organigram').disabled = false;
        document.getElementById('logo').disabled = false;
        document.getElementById('filosofiLogo').disabled = false;
        document.getElementById('deskripsi').disabled = false;
    }
</script>
@endsection
