@extends('layouts.master')
@section('title', 'Update UKM')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui UKM/Komunitas</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">UKM/Komunitas</h4>
        </div>
        <div class="card-body">
        <div class="basic-form">
            @if (Auth::user()->roles_id == '1')
                <form method="POST" action="{{ route('dashboard.ukm.update', $result->ormawas->id) }}">
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
                <form method="POST" action="{{ route('dashboardOrmawa.ukm.update', $result->ormawas->id) }}">
            @endif

                        @method('PUT')
                        @csrf

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Singkat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat"
                            id="namaSingkat" value="{{ $result->ormawas->namaSingkat }}" required disabled>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap"
                            id="namaLengkap" value="{{ $result->ormawas->namaLengkap }}" required disabled>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Pembina</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Pembina" name="pembina" id="pembina"
                            value="{{ $result->pembina }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Ketua Umum</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Ketua Umum" name="ketuaUmum" id="ketuaUmum"
                            value="{{ $result->ketuaUmum }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="tahunBerdiri" id="tahunBerdiri"
                            value="{{ $result->tahunBerdiri }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Visi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Visi" name="visi" id="visi" value="{{ $result->ormawas->visiMisis->visi }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Misi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi" disabled>{{ $result->ormawas->visiMisis->misi }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Logo</label>
                    <div class="col-sm-9">
                        <input type="file" accept="image/*" class="form-control" name="logo" id="logo" value="{{ $result->logo }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Filosofi Logo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Filosofi Logo" name="filosofiLogo"
                            id="filosofiLogo" value="{{ $result->filosofiLogo }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Barcode</label>
                    <div class="col-sm-9">
                        <input type="file" accept="image/*" class="form-control" name="barcode" id="barcode"
                            value="{{ $result->barcode }}" disabled>
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9 ">
                        <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" disabled>{{ $artikel->body }}</textarea>
                    </div>
                </div>
                <div class="accordion accordion-danger-solid" id="accordion-two">
                    <div class="accordion-item">
                        <div class="accordion-header rounded-lg collapsed" id="accord-2One" data-bs-toggle="collapse"
                            data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="false"
                            role="button">
                            <span class="accordion-header-text">Sosial Media</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapse2One" class="accordion__body collapse" aria-labelledby="accord-2One"
                            data-bs-parent="#accordion-two">
                            <div class="accordion-body-text">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Website" name="website"
                                            id="website" value="{{ $result->ormawas->socialMedias->website }}" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Instagram" name="instagram"
                                            id="instagram" value="{{ $result->ormawas->socialMedias->instagram }}" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Youtube</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Youtube" name="youtube"
                                            id="youtube" value="{{ $result->ormawas->socialMedias->youtube }}" disabled>
                                    </div>

                                </div>
                            </div>
                        </div>
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
</div>

@endsection

@section('script')

@if (Auth::user()->roles_id == '1')
<script>
    function editData() {   
            document.getElementById('namaLengkap').disabled = false;
			document.getElementById('namaSingkat').disabled = false;
			document.getElementById('pembina').disabled = false;
			document.getElementById('ketuaUmum').disabled = false;
			document.getElementById('tahunBerdiri').disabled = false;
			document.getElementById('visi').disabled = false;
			document.getElementById('misi').disabled = false;
			document.getElementById('logo').disabled = false;
			document.getElementById('filosofiLogo').disabled = false;
			document.getElementById('barcode').disabled = false;
			document.getElementById('deskripsi').disabled = false;
			document.getElementById('website').disabled = false;
			document.getElementById('instagram').disabled = false;
			document.getElementById('youtube').disabled = false;
    }
</script>
@else
<script>
    function editData() {   
			document.getElementById('pembina').disabled = false;
			document.getElementById('ketuaUmum').disabled = false;
			document.getElementById('tahunBerdiri').disabled = false;
			document.getElementById('visi').disabled = false;
			document.getElementById('misi').disabled = false;
			document.getElementById('logo').disabled = false;
			document.getElementById('filosofiLogo').disabled = false;
			document.getElementById('barcode').disabled = false;
			document.getElementById('deskripsi').disabled = false;
			document.getElementById('website').disabled = false;
			document.getElementById('instagram').disabled = false;
			document.getElementById('youtube').disabled = false;
    }
</script>
@endif
@endsection