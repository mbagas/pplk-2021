@extends('layouts.master')
@section('title', 'Tambah Program Studi')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data Program Studi</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Program Studi</h4>
        </div>
        <div class="card-body">
            @if($errors->any())
                @foreach($errors->all() as $data)
                    <div class="alert alert-danger">
                        {{ $data }}
                    </div>
                @endforeach
            @endif
            
            <form method="POST" action="{{ route('dashboard.prodi.store') }}" enctype="multipart/form-data">                
                @method('POST')
                @csrf
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Nama Lengkap" name="namaLengkap" class="form-control @error('namaLengkap') is-invalid @enderror" value="{{ old('namaLengkap') }}" id="namaLengkap" required>
                        @error('namaLengkap')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>            
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Nama Singkat</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Nama Singkat" name="namaSingkat" class="form-control @error('namaSingkat') is-invalid @enderror" value="{{ old('namaSingkat') }}" id="namaSingkat" required>
                        @error('namaSingkat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Jurusan</label>
                    <div class="col-sm-9">
                        <select name="jurusans_id" class="form-control wide" tabindex="0" id="jurusan">
                            @foreach ($jurusans as $data)
                            <option value="{{ $data->id }}">{{ $data->namaLengkap}} ({{ $data->namaSingkat }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Kepala Prodi</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Kepala Prodi" name="kepalaProdi" class="form-control  " id="kepalaProdi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Tahun Berdiri</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="Tahun Berdiri" name="tahunBerdiri" class="form-control  " id="tahunBerdiri">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Akreditasi</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Akreditasi" name="akreditasi" class="form-control  " id="akreditasi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Visi</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Visi" name="visi" class="form-control" id="visi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Misi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" class="form-control" id="misi"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Ruang Prodi</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Ruang Prodi" name="ruangProdi" class="form-control" id="ruangProdi">
                    </div>
                </div>                    
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Jumlah Mahasiswa</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="Jumlah Mahasiswa" name="jumlahMahasiswa" class="form-control" id="jumlahMahasiswa">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Diagram Alir</label>
                    <div class="col-sm-9">
                        <input type="file" accept="image/*" name="diagramAlir" class="form-control  " id="diagramAlir" >
                    </div>
                </div>
                                                
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9 ">
                        <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" class="form-control" id="deskripsi"></textarea>
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
                                    <input type="text" placeholder="Website" name="website" class="form-control" id="website">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Instagram" name="instagram" class="form-control" id="instagram">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Youtube</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Youtube" name="youtube" class="form-control" id="youtube">
                                </div>
                            </div>                            
                        </div>
                        </div>
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


@endsection
