@extends('layouts.master')
@section('title', 'Update PPLK')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui Data Game</h1>
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
        @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif

            <div class="basic-form">
                <form method="POST" action="{{ route('dashboard.findCode.update', $findCode) }} "
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input name="id" value="{{ $dataFindCode->id }}" type="hidden">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Objek</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" value="{{ $dataFindCode->nama }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">gambar objek</label>
                        <img class="img-thumbnail w-25" src="{{ $dataFindCode->gambar ?? asset('assets/images/LogoItera.png') }}" alt="" height="300" width="300">

                        <div class="col-sm-6">
                            <input type="file" accept="image/*" class="form-control" placeholder="Logo" name="gambar"
                                id="gambar" value="{{ $dataFindCode->gambar }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="nama" name="code" id="code" value="{{ $dataFindCode->code }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">skor</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Misi" name="skor" id="skor"
                            value="{{ $dataFindCode->games->skor }}" required disabled>
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


@endsection

@section('script')
<script>
    function editData() {   
      document.getElementById('nama').disabled = false;
      document.getElementById('gambar').disabled = false;
      document.getElementById('code').disabled = false;
      document.getElementById('skor').disabled = false;
    }    
</script>

@endsection