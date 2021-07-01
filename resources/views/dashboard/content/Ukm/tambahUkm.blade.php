@extends('layouts.master')
@section('title', 'Tambah UKM')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data UKM/Komunitas</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">UKM/Komunitas</h4>
        </div>
        <div class="basic-form">
            <div class="card-body">
                <form method="POST" action="{{ route('dashboard.ukm.store') }}">
                    @method('POST')
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Singkat</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Nama Singkat" name="namaSingkat" class="form-control"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Nama Lengkap" name="namaLengkap" class="form-control"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Pembina</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Pembina" name="pembina" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Ketua Umum</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Ketua Umum" name="ketuaUmum" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Tahun Berdiri</label>
                        <div class="col-sm-9">
                            <input type="number" name="tahunBerdiri" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Visi</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Visi" name="visi" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Misi</label>
                        <div class="col-sm-9">
                            <textarea type="text" placeholder="Misi" name="misi" class="form-control custom-txt-area misi" required></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Logo</label>
                        <div class="col-sm-9">
                            <input type="file" accept="image/*" class="form-control" name="logo" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Filosofi Logo</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Filosofi Logo" name="filosofiLogo" class="form-control"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Barcode</label>
						<div class="col-sm-9">
						    <input type="file" accept="image/*" class="form-control" name="barcode" >
							</div>
					</div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Prestasi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control custom-txt-area prestasi" placeholder="Prestasi"
							name="prestasi" required></textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control custom-txt-area " placeholder="Deskripsi"
							name="deskripsi" required></textarea>
                        </div>
                    </div>

                    <div class="accordion accordion-danger-solid" id="accordion-two">
                        <div class="accordion-item">
                            <div class="accordion-header rounded-lg collapsed" id="accord-2One"
                                data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One"
                                aria-expanded="false" role="button">
                                <span class="accordion-header-text">Sosial Media</span>
                                <span class="accordion-header-indicator"></span>
                            </div>
                            <div id="collapse2One" class="accordion__body collapse" aria-labelledby="accord-2One"
                                data-bs-parent="#accordion-two">
                                <div class="accordion-body-text">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Website</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Website" name="website" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Instagram</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Instagram" name="instagram" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Youtube</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Youtube" name="youtube" required>
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
</div>


@endsection