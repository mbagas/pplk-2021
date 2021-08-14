@extends('layouts.master')
@section('title', 'Update Himpunan')
@section('content')


<div class="col-lg-12col-lg-12 form-wrapper">
  <h1 class="content-title">Perbarui Himpunan</h1>
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Himpunan</h4>
    </div>
    <div class="card-body">
      @if (Auth::user()->roles_id == '1')
      <form method="POST" action="{{ route('dashboard.himpunan.update', $himpunan->id) }}" enctype='multipart/form-data'>
        @else
        @if (session('sukses'))
        <div class="alert alert-success">
          {{ session('sukses') }}
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        <form method="POST" action="{{ route('dashboardOrmawa.himpunan.update', $himpunan->id) }}" enctype='multipart/form-data'>
          @endif

          @method('PUT')
          @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <label for="">{{ $himpunan->namaLengkap }}</label>
              
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Singkat</label>
            <div class="col-sm-9">
              <label for="">{{ $himpunan->namaSingkat }}</label>
              
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Pembina</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Pembina" name="pembina" id="pembina" value="{{ $dataHimpunan->pembina }}" disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Ketua Himpunan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Ketua Heimpunan" name="ketuaHimpunan" id="ketuaHimpunan" value="{{ $dataHimpunan->ketuaHimpunan }}" disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="tahunBerdiri" id="tahunBerdiri" value="{{ $dataHimpunan->tahunBerdiri }}" disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Kode Warna</label>
            <div class="col-sm-9">
              <input type="text" name="kodeWarna" class="form-control" value="{{ $dataHimpunan->kodeWarna }}" id="kodeWarna" disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Visi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="Visi" name="visi" id="visi" value="{{ $himpunan->visimisis->visi }}" disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Misi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi" rows="4" disabled>{{ $himpunan->visimisis->misi }}</textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Logo</label>
            <img class="img-thumbnail w-25" src="{{ $dataHimpunan->logo ?? asset('assets/images/LogoItera.png') }}" alt="" height="300" width="300">
            <div class="col-sm-6">
              <input type="file" accept="image/*" class="form-control" name="logo" id="logo" value="{{ $dataHimpunan->logo }}" disabled>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Filosofi Logo</label>
            <div class="col-sm-9">
              <textarea type="text" class="form-control" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" disabled>{{ $dataHimpunan->filosofiLogo }}</textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9 ">
              <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" rows="4" disabled>{{ $himpunan->artikels->body }}</textarea>
            </div>
          </div>
          <div class="accordion accordion-danger-solid" id="accordion-two">
            <div class="accordion-item">
              <div class="accordion-header rounded-lg collapsed" id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="false" role="button">
                <span class="accordion-header-text">Sosial Media</span>
                <span class="accordion-header-indicator"></span>
              </div>
              <div id="collapse2One" class="accordion__body collapse" aria-labelledby="accord-2One" data-bs-parent="#accordion-two">
                <div class="accordion-body-text">
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Website</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Website" name="website" id="website" value="{{ $himpunan->socialMedias->website }}" disabled>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Instagram</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram" value="{{ $himpunan->socialMedias->instagram }}" disabled>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Youtube</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Youtube" name="youtube" id="youtube" value="{{ $himpunan->socialMedias->youtube }}" disabled>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Simpan</button>
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
    document.getElementById('pembina').disabled = false;
    document.getElementById('ketuaHimpunan').disabled = false;
    document.getElementById('tahunBerdiri').disabled = false;
    document.getElementById('kodeWarna').disabled = false;
    document.getElementById('visi').disabled = false;
    document.getElementById('misi').disabled = false;
    document.getElementById('logo').disabled = false;
    document.getElementById('filosofiLogo').disabled = false;
    document.getElementById('deskripsi').disabled = false;
    document.getElementById('website').disabled = false;
    document.getElementById('instagram').disabled = false;
    document.getElementById('youtube').disabled = false;
  }
</script>

@endsection
