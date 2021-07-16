@extends('layouts.master')
@section('title', 'Update UPT')
@section('content')
        <div class="col-xl-12 col-lg-12 form-wrapper">
            <h1 class="content-title">Perbarui Data UPT</h1>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">UPT</h4>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    @foreach($errors->all() as $data)
                        <div class="alert alert-danger">
                        {{ $data }}
                        </div>
                    @endforeach
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                    {{ session('error') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('dashboard.upt.update', $upt) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input name="id" value="{{ $upt->id }}" type="hidden">

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control  " value="{{ $result->nama }}" id="namaUpt" required disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="deskripsi" class="form-control custom-txt-area " id="deskripsiUpt"  required disabled >{{ $result->deskripsi }}</textarea>
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

@endsection

@section('script')
<script>
    function editData() {
        document.getElementById('namaUpt').disabled = false;
        document.getElementById('deskripsiUpt').disabled = false;
    }
</script>
@endsection
