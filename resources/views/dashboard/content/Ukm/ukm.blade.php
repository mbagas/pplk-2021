@extends('layouts.master')
@section('title', 'Data UKM')
@section('content')

<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data UKM/Komunitas</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data UKM/Komunitas</h4>
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
                            <th>Nama Pembina</th>
                            <th>Ketua Umum</th>
                            <th>Logo</th>
                            <th>Prestasi</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $data )
                        <tr>
                            <td>1</td>
                            <td>{{$data->ormawas->namaLengkap}}</td>
                            <td>{{$data->pembina}}</td>
                            <td>{{$data->ketuaUmum}}</td>
                            <td>{{$data->logo}}</td>
                            <td>{{$data->prestasi}}</td>
                            <td class="manage-row">
                                <a href="{{route('dashboard.ukm.edit', $data->id)}}" class="edit-button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a role="button" class="delete-button" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-sm">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                            <div class="modal-footer">
                                                <form action="{{route('dashboard.ukm.destroy', $data->ormawas->id)}}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="submit" class="btn btn-danger light" name="" id=""
                                                        value="Hapus">
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">Tidak</button>
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