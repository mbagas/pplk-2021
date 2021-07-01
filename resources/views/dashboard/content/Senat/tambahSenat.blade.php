@extends('layouts.master')
@section('title', 'Tambah Senat')
@section('content')
<div class="col-xl-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data Senat</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Senat</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('dashboard.senat.store') }}">
            @csrf
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Nama Ketua</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Nama Ketua" name="ketua" class="form-control" id="ketua" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label col-form-label-lg">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" required ></textarea>
                    </div>
                </div>
                <div class="accordion accordion-danger-solid" id="accordion-two">
                    <div class="accordion-item">
                        <div class="accordion-header rounded-lg collapsed" id="accord-2One" data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-controls="collapse2One" aria-expanded="false" role="button">
                        <span class="accordion-header-text">Sosial Media</span>
                        <span class="accordion-header-indicator"></span>
                        </div>
                        <div id="collapse2One" class="accordion__body collapse" aria-labelledby="accord-2One" data-bs-parent="#accordion-two" >
                        <div class="accordion-body-text">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Website</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Website" name="website" id="website" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Instagram</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Youtube</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Youtube" name="youtube" id="youtube" >
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary ">Tambah</button>
                    </div>
                </div>
            </form>        
        </div>
    </div>
</div>



@endsection
