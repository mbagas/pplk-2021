@extends('layouts.master')
@section('title', 'Data Tugas')
@section('content')
<div class="row form-wrapper">
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
          <table id="example4" class="display" style="min-width: 845px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Format</th>
                    <th>Start Time</th>
                    <th>EndTime</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($tugass as $tugas )
              <tr>
                <td>{{ $tugas->id }}</td>
                <td>{{ $tugas->judul }}</td>
                <td>{{ $tugas->format }}</td>
                <td>{{ $tugas->start_time }}</td>
                <td>{{ $tugas->end_time }}</td>
                @if(Auth::user()->roles_id != 2)
                  <td class="manage-row">
                    <a href="{{route('dashboard.submissionSelect', $tugas->id)}}" class="edit-button">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>

                    
                  </td>
                @else
                <td class="manage-row">
                  <a href="{{route('dashboardTugas.submissionSelect', $tugas->id)}}" class="edit-button">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>

                  
                </td>
                @endif
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
