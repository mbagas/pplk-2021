@extends('layouts.master')
@section('title', 'Tambah Senat')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Senat</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.senat.store') }}">
                        @csrf
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Nama Ketua</label>
                        <div class="col-sm-10">
                            <input type="text" name="ketua" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        
                        </div>
                    
                  
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" name="deskripsi" class="form-control form-control-lg"required>
                        </div>
                        </div>
                        
                        

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Website</label>
                            <div class="col-sm-10">
                                <input type="text" name="website" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" name="youtube" class="form-control form-control-lg">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label col-form-label-lg">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" class="form-control form-control-lg">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
@endsection