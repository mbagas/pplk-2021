@extends('layouts.master')
@section('title', 'Update Himpunan')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Perbarui Himpunan</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('updateHimpunan') }}" enctype="multipart/form-data">
          @csrf

          <input name="id" value="{{ $himpunan->ormawas->id }}" type="hidden">
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" name="namaLengkap" class="form-control form-control-lg" value="{{ $himpunan->ormawas->namaLengkap }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Singkat</label>
            <div class="col-sm-10">
              <input type="text" name="namaSingkat" class="form-control form-control-lg" value="{{ $himpunan->ormawas->namaSingkat }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Kode Warna</label>
            <div class="col-sm-10">
              <input type="text" name="kodeWarna" class="form-control form-control-lg" value="{{ $himpunan->kodeWarna }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Ketua Himpunan</label>
            <div class="col-sm-10">
              <input type="text" name="ketuaHimpunan" class="form-control form-control-lg" value="{{ $himpunan->ketuaHimpunan }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Pembina</label>
            <div class="col-sm-10">
              <input type="text" name="pembina" class="form-control form-control-lg" value="{{ $himpunan->pembina }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Tahun Berdiri</label>
            <div class="col-sm-10">
              <input type="number" name="tahunBerdiri" class="form-control form-control-lg" value="{{ $himpunan->tahunBerdiri }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Logo</label>
            <div class="col-sm-10">
              <input type="file" name="logo" class="form-control form-control-lg" value="{{ $himpunan->logo }}" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Filosofi Logo</label>
            <div class="col-sm-10">
              <input type="text" name="filosofiLogo" class="form-control form-control-lg" value="{{ $himpunan->filosofiLogo }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Website</label>
            <div class="col-sm-10">
              <input type="text" name="website" class="form-control form-control-lg" value="{{ $socialMedia->website }}">
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Youtube</label>
            <div class="col-sm-10">
              <input type="text" name="youtube" class="form-control form-control-lg" value="{{ $socialMedia->youtube }}">
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Instagram</label>
            <div class="col-sm-10">
              <input type="text" name="instagram" class="form-control form-control-lg" value="{{ $socialMedia->instagram }}">
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Visi</label>
            <div class="col-sm-10">
              <input type="text" name="visi" class="form-control form-control-lg" value="{{ $visiMisi->visi }}" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Misi</label>
            <div class="col-sm-10">
              <textarea type="text" name="misi" class="form-control form-control-lg" required>{{ $visiMisi->misi }}</textarea>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
              <textarea type="text" name="artikel" class="form-control form-control-lg" required>{{ $artikel->body }}</textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Update</button>

        </form>

      </div>
    </div>
  </div>
</div>

@endsection
