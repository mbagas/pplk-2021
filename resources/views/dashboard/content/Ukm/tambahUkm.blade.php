@extends('layouts.master')
@section('title', 'Tambah UKM')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah UKM</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.ukm.store') }}">
                        @method('POST')
                        @csrf
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama Singkat</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaSingkat" class="form-control form-control-lg" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Pembina</label>
                        <div class="col-sm-10">
                            <input type="text" name="pembina" class="form-control form-control-lg"required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Ketua Umum</label>
                        <div class="col-sm-10">
                            <input type="text" name="ketuaUmum" class="form-control form-control-lg" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Tahun Berdiri</label>
                        <div class="col-sm-10">
                            <input type="number" name="tahunBerdiri" class="form-control form-control-lg" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Website</label>
                            <div class="col-sm-10">
                                <input type="text" name="website" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" name="youtube" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Visi</label>
                            <div class="col-sm-10">
                                <input type="text" name="visi" class="form-control form-control-lg" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Misi</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="misi" class="form-control form-control-lg" required></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="artikel" class="form-control form-control-lg" required></textarea>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="artikel" class="form-control form-control-lg" required></textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
