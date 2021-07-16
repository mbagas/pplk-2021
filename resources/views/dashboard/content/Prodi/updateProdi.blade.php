@extends('layouts.master')
@section('title', 'Update Program Studi')
@section('content')
    
<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui Program Studi</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Program Studi</h4>
        </div>
        <div class="card-body">
            
            @if (Auth::user()->roles_id == '1')
                    <form method="POST" action="{{ route('dashboard.prodi.update', $prodi) }}" enctype="multipart/form-data">
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
                    <form method="POST" action="{{ route('dashboardOrmawa.prodi.update', $prodiData->ormawas->id) }}" enctype="multipart/form-data">
                @endif
                        @method('PUT')
                        @csrf
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="namaLengkap" class="form-control" value="{{ $prodiData->ormawas->namaLengkap }}" id="namaLengkap" required disabled>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Nama Singkat</label>
                    <div class="col-sm-9">
                        <input type="text" name="namaSingkat" class="form-control" value="{{ $prodiData->ormawas->namaSingkat }}" id="namaSingkat" required disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Jurusan</label>
                    <div class="col-sm-9">
                        <select name="jurusans_id" class="form-control wide mb-3" tabindex="0" id="jurusan" required disabled>
                            <option value="{{ $prodiData->jurusans->id }}">{{ $prodiData->jurusans->namaLengkap }} ({{ $prodiData->jurusans->namaSingkat }})</option>
                            @foreach ($jurusans as $data)
                            <option value="{{ $data->id }}">{{ $data->namaLengkap}} ({{ $data->namaSingkat }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>                    
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Kepala Prodi</label>
                    <div class="col-sm-9">
                        <input type="text" name="kepalaProdi" class="form-control  " value="{{ $prodiData->kepalaProdi }}" id="kepalaProdi" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Tahun Berdiri</label>
                    <div class="col-sm-9">
                        <input type="number" name="tahunBerdiri" class="form-control  " value="{{ $prodiData->tahunBerdiri }}" id="tahunBerdiri" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Akreditasi</label>
                    <div class="col-sm-9">
                        <input type="text" name="akreditasi" class="form-control  " value="{{ $prodiData->akreditasi }}" id="akreditasi" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Visi</label>
                    <div class="col-sm-9">
                        <input type="text" name="visi" class="form-control  " value="{{ $prodiData->ormawas->visiMisis->visi }}" id="visi" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Misi</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="misi" class="form-control custom-text-area misi" id="misi" disabled>{{ $prodiData->ormawas->visiMisis->misi }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Ruang Prodi</label>
                    <div class="col-sm-9">
                        <input type="text" name="ruangProdi" class="form-control" value="{{ $prodiData->ruangProdi }}" id="ruangProdi" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Jumlah Mahasiswa</label>
                    <div class="col-sm-9">
                        <input type="number" name="jumlahMahasiswa" class="form-control" value="{{ $prodiData->jumlahMahaSiswa }}" id="jumlahMahasiswa" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Diagram Alir</label>
                    <div class="col-sm-9">
                        <input type="file" accept="image/*" name="diagramAlir" class="form-control  " value="{{ $prodiData->diagramAlir }}" id="diagramAlir" disabled>
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control custom-txt-area" name="deskripsi" id="deskripsi" disabled>{{ $prodiData->ormawas->artikels->body }}</textarea>
                    </div>
                </div>
                <div class="accordion accordion-danger-solid" id="accordion-two">
                    <div class="accordion-item">
                        <div class="accordion-header rounded-lg collapsed" id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="false" role="button">
                            <span class="accordion-header-text">Sosial Media</span>
                            <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapse2One" class="accordion__body collapse" aria-labelledby="accord-2One" data-bs-parent="#accordion-two" >
                        <div class="accordion-body-text">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Website</label>
                                <div class="col-sm-9">
                                    <input type="text" name="website" class="form-control" value="{{ $prodiData->ormawas->socialMedias->website }}" id="website" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" name="instagram" class="form-control" value="{{ $prodiData->ormawas->socialMedias->instagram }}" id="instagram" disabled>
                                </div>

                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Youtube</label>
                                <div class="col-sm-9">
                                    <input type="text" name="youtube" class="form-control" value="{{ $prodiData->ormawas->socialMedias->youtube }}" id="youtube" disabled>
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


@endsection

@section('script')
@if(Auth::user()->roles_id == '1')
<script>
    function editData() {   
        document.getElementById('namaLengkap').disabled = false;
        document.getElementById('namaSingkat').disabled = false;
        document.getElementById('jurusan').disabled = false;
        document.getElementById('kepalaProdi').disabled = false;
        document.getElementById('tahunBerdiri').disabled = false;
        document.getElementById('akreditasi').disabled = false;
        document.getElementById('visi').disabled = false;
        document.getElementById('misi').disabled = false;
        document.getElementById('ruangProdi').disabled = false;
        document.getElementById('jumlahMahasiswa').disabled = false;
        document.getElementById('diagramAlir').disabled = false;
        document.getElementById('deskripsi').disabled = false;
        document.getElementById('website').disabled = false;
        document.getElementById('instagram').disabled = false;
        document.getElementById('youtube').disabled = false;
    }
</script>
@else
<script>
    function editData() {
        document.getElementById('jurusan').disabled = false;
        document.getElementById('kepalaProdi').disabled = false;
        document.getElementById('tahunBerdiri').disabled = false;
        document.getElementById('akreditasi').disabled = false;
        document.getElementById('visi').disabled = false;
        document.getElementById('misi').disabled = false;
        document.getElementById('ruangProdi').disabled = false;
        document.getElementById('jumlahMahasiswa').disabled = false;
        document.getElementById('diagramAlir').disabled = false;
        document.getElementById('deskripsi').disabled = false;
        document.getElementById('website').disabled = false;
        document.getElementById('instagram').disabled = false;
        document.getElementById('youtube').disabled = false;
    }
</script>
@endif
@endsection