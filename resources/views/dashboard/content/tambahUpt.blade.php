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
                    <form method="POST" action="{{ route('storeUPT') }}">
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control form-control-lg" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="deskripsi" class="form-control form-control-lg" required></textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
