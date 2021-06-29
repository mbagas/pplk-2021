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
            <div class="basic-form">
                <form method="POST" action="{{ route('dashboard.prodi.update',$result->ormawas->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" name="namaLengkap" class="form-control" value="{{ $result->ormawas->namaLengkap }}" id="namaLengkap" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Singkat</label>
                        <div class="col-sm-9">
                            <input type="text" name="namaSingkat" class="form-control" value="{{ $result->ormawas->namaSingkat }}" id="namaSingkat" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <input type="text" name="jurusan" class="form-control" value="{{ $result->ormawas->jurusan }}" id="jurusan" required disabled>
                        </div>
                    </div>                    
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Kepala Prodi</label>
                        <div class="col-sm-9">
                            <input type="text" name="kepalaProdi" class="form-control" value="{{ $result->ormawas->kepalaProdi }}" id="kepalaProdi" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
                        <div class="col-sm-9">
                            <input type="number" name="tahunBerdiri" class="form-control" value="{{ $result->ormawas->tahunBerdiri }}" id="tahunBerdiri" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Akreditasi</label>
                        <div class="col-sm-9">
                            <input type="text" name="akreditasi" class="form-control" value="{{ $result->ormawas->akreditasi }}" id="akreditasi" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Visi</label>
                        <div class="col-sm-9">
                            <input type="text" name="visi" class="form-control" value="{{ $result->ormawas->visi }}" id="visi" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Misi</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="misi" class="form-control" value="{{ $result->ormawas->misi }}" id="misi" required disabled></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Ruang Prodi</label>
                        <div class="col-sm-9">
                            <input type="text" name="ruangProdi" class="form-control" value="{{ $result->ormawas->ruangProdi }}" id="ruangProdi" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Jumlah Mahasiswa</label>
                        <div class="col-sm-9">
                            <input type="number" name="jumlahMahasiswa" class="form-control" value="{{ $result->ormawas->jumlahMahasiswa }}" id="jumlahMahasiswa" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Diagram Alir</label>
                        <div class="col-sm-9">
                            <input type="file" accept="image/*" name="diagramAlir" class="form-control" value="{{ $result->ormawas->diagramAlir }}" id="diagramAlir" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Prestasi</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="prestasi" class="form-control" value="{{ $result->ormawas->prestasi }}" id="prestasi" required disabled></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="deskripsi" class="form-control" value="{{ $result->ormawas->deskripsi }}" id="deskripsi" required disabled></textarea>
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
                                        <input type="text" name="website" class="form-control" value="{{ $result->ormawas->website }}" id="website" required disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="instagram" class="form-control" value="{{ $result->ormawas->instagram }}" id="instagram" required disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Youtube</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="youtube" class="form-control" value="{{ $result->ormawas->youtube }}" id="youtube" required disabled>
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
        document.getElementById('prestasi').disabled = false;
        document.getElementById('deskripsi').disabled = false;
        document.getElementById('website').disabled = false;
        document.getElementById('instagram').disabled = false;
        document.getElementById('youtube').disabled = false;
    }
</script>
@endsection