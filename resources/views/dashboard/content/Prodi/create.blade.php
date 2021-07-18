@extends('layouts.master')
@section('title', 'Tambah Program Studi')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data Program Studi</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Program Studi</h4>
        </div>
        <div class="card-body">
            @if($errors->any())
                @foreach($errors->all() as $data)
                    <div class="alert alert-danger">
                        {{ $data }}
                    </div>
                @endforeach
            @endif
            
            <form method="POST" action="{{ route('dashboard.prodi.store') }}" enctype="multipart/form-data">                
                @method('POST')
                @csrf
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Nama Lengkap" name="namaLengkap" class="form-control @error('namaLengkap') is-invalid @enderror" value="{{ old('namaLengkap') }}" id="namaLengkap" required>
                        @error('namaLengkap')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>            
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Nama Singkat</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Nama Singkat" name="namaSingkat" class="form-control @error('namaSingkat') is-invalid @enderror" value="{{ old('namaSingkat') }}" id="namaSingkat" required>
                        @error('namaSingkat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Jurusan</label>
                    <div class="col-sm-9">
                        <select name="jurusans_id" class="form-control wide" tabindex="0" id="jurusan">
                            @foreach ($jurusans as $data)
                            <option value="{{ $data->id }}">{{ $data->namaLengkap}} ({{ $data->namaSingkat }})</option>
                            @endforeach
                        </select>
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


@endsection
