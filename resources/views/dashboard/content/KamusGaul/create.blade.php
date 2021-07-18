@extends('layouts.master')
@section('title', 'Tambah Kamus Gaul')
@section('content')

        <div class="col-xl-12 col-lg-12 form-wrapper">
            <h1 class="content-title">Masukkan Data Kamus Gaul</h1>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kata Gaul</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.kamusGaul.store') }}">
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Nama" name="gaul" class="form-control" id="gaul" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea type="text" placeholder="Deskripsi" name="asli" class="form-control" id="asli" required></textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

                    </form>

                </div>
            </div>
        </div>


@endsection
