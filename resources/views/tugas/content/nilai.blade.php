@extends('layouts.master')
@section('title', 'Nilai Tugas')
@section('content')
<div class="row form-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Detail Pengerjaan</h4>
      </div>
      <div class="card-body">
        @if (session('sukses'))
        <div class="alert alert-success">
          {{ session('sukses') }}
        </div>
        @elseif (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('dashboard.submissions.update', $submission->id) }}" enctype="multipart/form-data">  
            @else
            <form method="POST" action="{{ route('dashboardTugas.submissions.update', $submission->id) }}" enctype="multipart/form-data">
              @endif       
            @method('PUT')
            @csrf
          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" value="{{$tugas->judul}}" readonly>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
            <div class="col-sm-10">
              <textarea type="numeric" class="form-control form-control-lg" readonly>{{$tugas->deskripsi}}</textarea>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">File</label>
            <div class="col-sm-10">
              <a href="{{ $submission->file }}">{{ $submission->users->kelompok }}_{{ $submission->users->nama }}_{{ $submission->tugas->judul }}</a>
            </div>
          </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Jawaban</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control form-control-lg" readonly>{{$submission->jawaban}}</textarea>
            </div>
          </div>

          <div class="mb-3 row">
          <label class="col-sm-2 col-form-label col-form-label-lg">Nilai</label>
          <div class="col-sm-10">
              <div class="row">
              
          @foreach ($parameters as $param)
            <div class="col-sm-2">
                <label class="form-label">{{ $param->nama }} ({{ $param->persen }}%)</label>
                <input type="number" name="parameter[]" class="form-control" onkeyup="hitung()" value="0">
                <input type="hidden" name="persen[]" value="{{ $param->persen }}">
            </div>
              
          @endforeach
          </div>
          </div>
        </div>

          <div class="mb-3 row">
            <label class="col-sm-2 col-form-label col-form-label-lg">Total Nilai</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" name="nilai" id="nilai" value="0" readonly/>
            </div>
          </div>

          <div class="mb-3 row">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary ">Nilai</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    function hitung(){
        var total = 0;
        var param = document.getElementsByName('parameter[]');
        var pers = document.getElementsByName('persen[]');
            for (var i = 0; i < param.length; i++) {
                total = total + param[i].value * pers[i].value / 100;
            }
            document.getElementById("nilai").value = total;  
    }
    </script>


@endsection
