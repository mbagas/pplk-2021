@extends('layouts.master')
@section('title', 'Tambah UPT')
@section('content')
        <div class="col-xl-12 col-lg-12 form-wrapper">
            <h1 class="content-title">Masukkan Data UPT</h1>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">UPT</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.upt.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label col-form-label-lg">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
							<label class="col-sm-3 col-form-label">Deskripsi</label>
							<div class="col-sm-9">
								<textarea class="form-control custom-txt-area" name="deskripsi" placeholder="Deskripsi" id="deskripsi" required></textarea>
							</div>
						</div>
                        <div class="mb-3 row">
							<div class="col-sm-9">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>

@endsection
