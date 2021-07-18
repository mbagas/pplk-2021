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
                <form method="POST" action="{{ route('dashboard.ukm.store') }}" enctype="multipart/form-data">
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