@extends('layouts.master')
@section('title', 'Data UKM')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data UKM</h4>
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
                                    <th style="width:80px;"><strong>Nama Singkat</strong></th>
                                    <th class="text-center"><strong>Nama Lengkap</strong></th>
                                    <th class="text-center"><strong>Ketua Umum</strong></th>
                                    <th class="text-center"><strong>Pembina</strong></th>
                                    <th class="text-center"><strong>Tahun Berdiri</strong></th>
                                    <th class="text-center"><strong>ACTION</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            {{-- link paginate --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection