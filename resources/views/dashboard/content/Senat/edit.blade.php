@extends('layouts.master')
@section('title', 'Update Senat')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
  <h1 class="content-title">Perbarui Senat</h1>
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Senat</h4>
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
      <form method="POST" action="{{ route('dashboard.senat.update', $senat->id) }}" enctype='multipart/form-data'>
        @method('PUT')
        @csrf
        <input name="id" value="{{ $senat->id }}" type="hidden">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label col-form-label-lg">Nama Ketua</label>
          <div class="col-sm-9">
            <input type="text" name="ketua" class="form-control" id="ketua" value="{{ $senat->ketua }}" required disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label col-form-label-lg">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" name="deskripsi" id="deskripsi" disabled required >{{ $senat->deskripsi }}</textarea>
          </div>
        </div>
        <div class="accordion accordion-danger-solid" id="accordion-two">
            <div class="accordion-item">
                <div class="accordion-header rounded-lg collapsed" id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="false" role="button">
                    <span class="accordion-header-text">Sosial Media</span>
                    <span class="accordion-header-indicator"></span>
                </div>
                <div id="collapse2One" class="accordion__body collapse" aria-labelledby="accord-2One" data-bs-parent="#accordion-two" >
                <div class="accordion-body-text">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Website</label>
                        <div class="col-sm-9">
                            <input type="text" name="website" class="form-control" value="{{ $senat->website }}" id="website" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                            <input type="text" name="instagram" class="form-control" value="{{ $senat->instagram }}" id="instagram" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Youtube</label>
                        <div class="col-sm-9">
                            <input type="text" name="youtube" class="form-control" value="{{ $senat->youtube }}" id="youtube" disabled>
                        </div>
                    </div>                            
                </div>
                </div>
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
        document.getElementById('ketua').disabled = false;        
        document.getElementById('deskripsi').disabled = false;
        document.getElementById('website').disabled = false;
        document.getElementById('instagram').disabled = false;
        document.getElementById('youtube').disabled = false;
    }
</script>
@endsection