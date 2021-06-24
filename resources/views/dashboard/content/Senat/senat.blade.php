@extends('layouts.master')
@section('title', 'Data Senat')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Senat</h4>
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
                                    <th style="width:80px;"><strong>Ketua</strong></th>
                                    <th class="text-center"><strong>Deskripsi</strong></th>
                                    <th class="text-center"><strong>Website</strong></th>
                                    <th class="text-center"><strong>Youtube</strong></th>
                                    <th class="text-center"><strong>Instagram</strong></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $data )
                                    <tr>
                                        <td class="text-center">{{$data->ketua}}</td>
                                        <td class="text-center">{{$data->deskripsi}}</td>
                                        <td class="text-center">{{$data->website}}</td>
                                        <td class="text-center">{{$data->youtube}}</td>
                                        <td class="text-center">{{$data->instagram}}</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </button>
                                                <div class="dropdown-menu" style="margin: 0px;">
                                                    <a class="dropdown-item" href="{{ route('dashboard.senat.edit', $data->id) }}">Edit</a>
                                                    <form action="{{route('dashboard.senat.destroy', $data->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="submit" class="dropdown-item" name="" id="" value="Hapus">
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