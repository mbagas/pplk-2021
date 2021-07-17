@extends('layouts.master')
@section('title', 'Data Kamus Gaul')
@section('content')
    <div class="col-xl-12 col-lg-12 form-wrapper">
        <h1 class="content-title">Kelola Data Kamus Gaul</h1>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kamus Gaul Lampung</h4>
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
                                    <th>Gaul</th>
                                    <th>Asli</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kamusGauls as $data )
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->gaul}}</td>
                                        <td>{{$data->asli}}</td>
                                        <td class="manage-row">
                                            <a href="{{route('dashboard.kamusGaul.edit', ['kamusGaul' => $data->id])}}" class="edit-button">
                                              <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$data->id}}">
                                              <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <div class="modal fade bd-example-modal-sm{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                                        <div class="modal-footer">
                                                            <form action="{{route('dashboard.kamusGaul.destroy', $data->id)}}" method="POST">
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
                                    </tr>
                                @endforeach
                            </tbody>
                            {{-- link paginate --}}
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection
