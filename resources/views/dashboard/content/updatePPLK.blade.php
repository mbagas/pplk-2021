@extends('layouts.master')
@section('title', 'Update PPLK')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update PPLK</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('updatePPLK') }}" enctype="multipart/form-data">
                        @csrf

                        <input name="id" value="{{ $pplks->id }}" type="hidden">
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Logo</label>
                        <div class="col-sm-10">
                            <input type="file" name="logo" class="form-control form-control-lg" value="{{ $pplks->logo }}" required>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Visi</label>
                        <div class="col-sm-10">
                            <input type="text" name="visi" class="form-control form-control-lg" value="{{ $pplks->visi }}" required>
                        </div>
                        </div>
                    
                        <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Misi</label>
                        <div class="col-sm-10">
                            <input type="text" name="misi" class="form-control form-control-lg" value="{{ $pplks->misi }}" required>
                        </div>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-primary">Update</button>

                    </form>
                
                </div>
            </div>
        </div>
    </div>
    
@endsection