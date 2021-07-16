@extends('layouts.master')
@section('title', 'Data Tugas')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Data Tugas</h4>
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
        <div class="table-responsive">
          <table class="table table-responsive-md">
            <thead>
              <tr>
                <th style="width:80px;"><strong>NIM</strong></th>
                <th class="text-center"><strong>Nama</strong></th>
                <th class="text-center"><strong>Nilai</strong></th>
                <th class="text-center"><strong>ACTION</strong></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($submissions as $submission )
              <tr>
                <td class="text-center">{{$submission->users->nim}}</td>
                <td class="text-center">{{$submission->users->nama}}</td>
                <td class="text-center">{{$submission->nilai}}</td>
              </tr>
              @endforeach
            </tbody>
            {{-- link paginate --}}
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
