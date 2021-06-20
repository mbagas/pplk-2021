@extends('layouts.master')
@section('title', 'Update UKM')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update UKM</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('updateUKM') }}">
                        @csrf
                        <input name="id" value="{{ $result->ormawas->id }}" type="hidden">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control form-control-lg" value="{{ $result->ormawas->namaLengkap }}" required>
                            </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Nama Singkat</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaSingkat" class="form-control form-control-lg" value="{{ $result->ormawas->namaSingkat }}" required>
                            </div>
                            </div>
                        
                            <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Pembina</label>
                            <div class="col-sm-10">
                                <input type="text" name="pembina" class="form-control form-control-lg" value="{{ $result->pembina }}" required>
                            </div>
                            </div>
                            <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Ketua Umum</label>
                            <div class="col-sm-10">
                                <input type="text" name="ketuaUmum" class="form-control form-control-lg" value="{{ $result->ketuaUmum }}" required>
                            </div>
                            </div>
                            
                            <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Tahun Berdiri</label>
                            <div class="col-sm-10">
                                <input type="number" name="tahunBerdiri" class="form-control form-control-lg" value="{{ $result->tahunBerdiri }}" required>
                            </div>
                            </div>
    
                            <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="artikel" class="form-control form-control-lg" required>{{ $artikel->body }}</textarea>
                            </div>
                            </div>
                        <button type="submit" class="btn btn-lg btn-primary">Update</button>

                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
@endsection