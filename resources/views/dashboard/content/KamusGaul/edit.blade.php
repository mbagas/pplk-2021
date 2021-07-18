@extends('layouts.master')
@section('title', 'Update Kamus Gaul')
@section('content')
        <div class="col-xl-12 col-lg-12 form-wrapper">
            <h1 class="content-title">Perbarui Kamus Gaul</h1>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kata Gaul</h4>
                </div>
                <div class="card-body">
                   <div class="basic-form">
                        <form method="POST" action="{{ route('dashboard.kamusGaul.update', $kamusGaulData->id) }}">
                            @method('PUT')
                            @csrf

                            <input name="id" value="{{ $kamusGaulData->id }}" type="hidden">
                            <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="gaul" id="gaul" class="form-control" value="{{ $kamusGaulData->gaul }}" required disabled>
                            </div>
                            </div>

                            <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="asli" id="asli" class="form-control" required disabled>{{ $kamusGaulData->asli }}</textarea>
                            </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary " >Simpan</button>
                                    <button type="button" class="btn btn-outline-primary " onclick="editData()">Edit</button>
                                </div>
                            </div>

                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    function editData() {   
        document.getElementById('gaul').disabled = false;
        document.getElementById('asli').disabled = false;
    }
</script>
@endsection