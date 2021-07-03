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
                <th style="width:80px;"><strong>Judul</strong></th>
                <th class="text-center"><strong>Deskripsi</strong></th>
                <th class="text-center"><strong>File</strong></th>
                <th class="text-center"><strong>Format Penamaan</strong></th>
                <th class="text-center"><strong>Start Time</strong></th>
                <th class="text-center"><strong>End Time</strong></th>
                <th class="text-center"><strong>ACTION</strong></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($result as $data )
              <tr>
                <td class="text-center">{{$data->judul}}</td>
                <td class="text-center">{{$data->deskripsi}}</td>
                <td class="text-center">{{$data->file}}</td>
                <td class="text-center">{{$data->format}}</td>
                <td class="text-center">{{$data->start_time}}</td>
                <td class="text-center">{{$data->end_time}}</td>
                <td class="text-center">
                  <div class="dropdown">
                    <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24"></rect>
                          <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                          <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                          <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                        </g>
                      </svg>
                    </button>
                    <div class="dropdown-menu" style="margin: 0px;">
                      <a class="dropdown-item" href="{{route('dashboard.tugas.show', $data->id)}}">Details</a>
                      <a class="dropdown-item" href="{{route('dashboard.tugas.submissions', $data->id)}}">Submissions</a>
                      <a class="dropdown-item" href="{{route('dashboard.tugas.edit', $data->id)}}">Edit</a>
                      <form action="{{route('dashboard.tugas.destroy', $data->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="dropdown-item" value="Delete">
                      </form>
                    </div>
                  </div>
                </td>
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
