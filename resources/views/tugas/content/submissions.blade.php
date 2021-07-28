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
          <table id="example4" class="display" style="min-width: 845px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelompok</th>
                    <th>ID Tugas</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    @if(auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2)
                    <th>More</th>
                    @endif
                </tr>
            </thead>
            <tbody>
              @foreach ($submissions as $data )
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->users->nama }}</td>
                <td>{{ $data->users->nim }}</td>
                <td>{{ $data->users->kelompok }}</td>
                <td>{{ $data->tugas_id }}</td>
                <td>{{ $data->nilai }}</td>
                <td>
                  @if($data->status)
                  <span class="badge badge-secondary">Selesai</span>
                  @else
                  <span class="badge badge-danger">Belum Mengerjakan</span>
                  @endif
                </td>
                @if(auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2)
                @if($data->status && auth()->user()->roles_id == 1)
                  <td class="manage-row">
                    <a href="{{route('dashboard.submissions.show', $data->id)}}" class="edit-button">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                  </td>
                @elseif($data->status && auth()->user()->roles_id == 2)
                <td class="manage-row">
                  <a href="{{route('dashboardTugas.submissions.show', $data->id)}}" class="edit-button">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                </td>
                @else
                <td class="manage-row">
                  <a href="#" onclick="alertin()" class="edit-button">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                </td>
                @endif
                @endif
                
              
              </tr>
              @endforeach
            </tbody>
            {{-- link paginate --}}
          </table>
        
        </div>
        
          </table>
        </div> 
      </div>
    </div>
  </div>
</div>

<script>
  function alertin(){
    alert('Tugas belum dikerjakan');
  }
  </script>

@endsection
