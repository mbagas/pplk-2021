@extends('layouts.master')
@section('title', 'Tambah PPLK')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data PPLK</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> PPLK</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="{{ route('dashboard.pplk.store') }}">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Logo</label>
                        <div class="col-sm-9">
                            <input type="file" name="logo" accept="image/*" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Visi</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Visi" name="visi" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Misi</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Misi" name="misi" class="form-control" required>
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