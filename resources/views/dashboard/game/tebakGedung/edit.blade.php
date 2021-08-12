@extends('layouts.master')
@section('title', 'Update PPLK')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui Data Game</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tebak Gedung</h4>
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
                <form method="POST" action="{{ route('dashboard.tebakGedung.update', $tebakGedung) }} "
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input name="id" value="{{ $dataTebakGedung->id }}" type="hidden">
                    
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">gambar Gedung</label>
                        <img class="img-thumbnail w-25" src="{{ $dataTebakGedung->gambar ?? asset('assets/images/LogoItera.png') }}" alt="" height="300" width="300">

                        <div class="col-sm-6">
                            <input type="file" accept="image/*" class="form-control" placeholder="Logo" name="gambar"
                                id="gambar" value="{{ $dataTebakGedung->gambar }}" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">pilihan 1</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" name="pil1" id="pil1" value="{{ $dataTebakGedung->pil1 }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Pilihan 2</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" name="pil2" id="pil2" value="{{ $dataTebakGedung->pil2 }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Pilihan 3</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" name="pil3" id="pil3" value="{{ $dataTebakGedung->pil3 }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Pilihan 4</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" name="pil4" id="pil4" value="{{ $dataTebakGedung->pil4 }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Jawaban</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" name="jawaban" id="jawaban" value="{{ $dataTebakGedung->jawaban }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">skor</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="" name="skor" id="skor"
                            value="{{ $dataTebakGedung->games->skor }}" required disabled>
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
      document.getElementById('gambar').disabled = false;
      document.getElementById('pil1').disabled = false;
      document.getElementById('pil2').disabled = false;
      document.getElementById('pil3').disabled = false;
      document.getElementById('pil4').disabled = false;
      document.getElementById('jawaban').disabled = false;
      document.getElementById('skor').disabled = false;
    }    
</script>

@endsection