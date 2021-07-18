@extends('layouts.master')
@section('title', 'Update PPLK')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui Data PPLK</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">PPLK</h4>
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
                <form method="POST" action="{{ route('dashboard.pplk.update', $pplk) }} "
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input name="id" value="{{ $pplk->id }}" type="hidden">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Logo</label>
                        <img class="img-thumbnail w-25" src="{{ $pplk->logo ?? asset('assets/images/LogoItera.png') }}" alt="" height="300" width="300">

                        <div class="col-sm-6">
                            <input type="file" accept="image/*" class="form-control" placeholder="Logo" name="logo"
                                id="logo" value="{{ $pplk->logo }}" required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Visi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Visi" name="visi" id="visi" value="{{ $pplk->visi }}"
                                required disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Misi</label>
                        <div class="col-sm-9">
                            <input class="form-control" placeholder="Misi" name="misi" id="misi"
                            value="{{ $pplk->misi }}" required disabled>
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
      document.getElementById('logo').disabled = false;
      document.getElementById('visi').disabled = false;
      document.getElementById('misi').disabled = false;
    }    
</script>

@endsection