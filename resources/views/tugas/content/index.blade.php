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
                    <th>Deskripsi</th>
                    <th>File</th>
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
                <td>{{ $tugas->deskripsi }}</td>
                <td>{{ $tugas->file }}</td>
                <td>{{ $tugas->format }}</td>
                <td>{{ $tugas->start_time }}</td>
                <td>{{ $tugas->end_time }}</td>
                @if(Auth::user()->roles_id != 2)
                  <td class="manage-row">
                    <a href="{{route('dashboard.tugas.show', $tugas->id)}}" class="edit-button">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('dashboard.tugas.edit', $tugas->id)}}" class="edit-button">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$tugas->id}}">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <div class="modal fade bd-example-modal-sm{{$tugas->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                <div class="modal-footer">
                                  <form action="{{route('dashboard.tugas.destroy', $tugas->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </td>
                @else
                <td class="manage-row">
                  <a href="{{route('dashboardTugas.tugas.show', $tugas->id)}}" class="edit-button">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                  <a href="{{route('dashboardTugas.tugas.edit', $tugas->id)}}" class="edit-button">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                  </a>
                  <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{ $tugas->id }}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a>
                  <div class="modal fade bd-example-modal-sm{{$tugas->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal">
                                  </button>
                              </div>
                              <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                              <div class="modal-footer">
                                <form action="{{route('dashboardTugas.tugas.destroy', $tugas->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
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
