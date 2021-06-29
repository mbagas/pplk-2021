@extends('layouts.master')
@section('title', 'Tambah Himpunan')
@section('content')

<div class="col-lg-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data Jurusan</h1>
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Himpunan</h4>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('dashboard.himpunan.store') }}" enctype='multipart/form-data'>
        @csrf
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" required disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama Singkat</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" required disabled>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Pembina</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Pembina" name="pembina" id="pembina" required disabled>
            </div>
        </div>
		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Ketua Himpunan</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Ketua Heimpunan" name="ketuaHimpunan" id="ketuaHimpunan" required disabled >
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Tahun Berdiri</label>
			<div class="col-sm-9">
				<input type="date" class="form-control" name="tahunBerdiri" id="tahunBerdiri" required disabled>
			</div>
		</div>
        <div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Kode Warna</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Kode Warna" name="kodeWarna" id="kodeWarna" required disabled>
			</div>
		</div>
        <div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Visi</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Visi" name="visi" id="visi" required disabled>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Misi</label>
			<div class="col-sm-9">
				<textarea class="form-control custom-txt-area misi" placeholder="Misi" name="misi" id="misi" required disabled></textarea>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Logo</label>
			<div class="col-sm-9">
				<input type="file" accept="image/*" class="form-control" name="logo" id="logo" value=$logo disabled>
			</div>
		</div>
		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Filosofi Logo</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" value=$filosofiLogo disabled>
			</div>
		</div>                                    
		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label">Deskripsi</label>
			<div class="col-sm-9 ">
				<textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="artikel" id="deskripsi" required disabled></textarea>
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
							<input type="text" class="form-control" placeholder="Website" name="website" id="website" value=$website disabled>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Instagram</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram" value=$instagram disabled>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Youtube</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Youtube" name="youtube" id="youtube" value=$youtube disabled>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>
        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

      </form>

    </div>
  </div>
</div>


@endsection
