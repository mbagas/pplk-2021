@extends('layouts.master')
@section('title', 'Tambah PPLK')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data Game</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Find the Code</h4>
        </div>
        <div class="card-body">
            @if($errors->any())
                @foreach($errors->all() as $data)
                    <div class="alert alert-danger">
                        {{ $data }}
                    </div>
                @endforeach
            @endif
            
            <div class="basic-form">
                <form method="POST" action="{{ route('dashboard.findCode.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Objek</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="nama" name="nama" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Gambar Objek</label>
                        <div class="col-sm-9">
                            <input type="file" name="gambar" accept="image/*" class="form-control"
                                >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">code</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="code" name="code" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">skor</label>
                        <div class="col-sm-9">
                            <input type="number" name="skor"  class="form-control"
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