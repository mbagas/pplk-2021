@extends('layouts.master')
@section('title', 'Tambah PPLK')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah PPLK</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storePPLK') }}">
                        @csrf
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Logo</label>
                        <div class="col-sm-10">
                            <input type="text" name="logo" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Visi</label>
                        <div class="col-sm-10">
                            <input type="text" name="visi" class="form-control form-control-lg" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Misi</label>
                        <div class="col-sm-10">
                            <input type="text" name="misi" class="form-control form-control-lg"required>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>

                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
@endsection