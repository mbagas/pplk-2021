@extends('layouts.master')
@section('title', 'Update Prodi')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Kamus Gaul Lampung</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.kamusGaul.update', $result->id) }}">
                        @method('PUT')
                        @csrf

                        <input name="id" value="{{ $result->id }}" type="hidden">
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="gaul" class="form-control form-control-lg" value="{{ $result->gaul }}" required>
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="asli" class="form-control form-control-lg" required>{{ $result->asli }}</textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
