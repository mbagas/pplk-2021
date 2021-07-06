@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="col-xl-12 col-lg-12 form-wrapper">
<div class="row">
        <div class="col-xl-6">
            <div class="widget-stat card bg-success">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="ti ti-user"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">Total Mahasiswa</p>
                            <h3 class="text-white">{{$totalMahasiswa}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="widget-stat card bg-warning">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="ti ti-gift"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">Total Stok</p>
                            <h3 class="text-white">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="widget-stat card bg-info">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="ti ti-files"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">Total Tugas Terkumpul</p>
                            <h3 class="text-white">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="me-3">
                            <i class="ti ti-shopping-cart-full"></i>
                        </span>
                        <div class="media-body text-white text-end">
                            <p class="mb-1">Total Pesanan</p>
                            <h3 class="text-white">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
