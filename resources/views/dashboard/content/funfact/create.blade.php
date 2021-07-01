@extends('layouts.master')
@section('title', 'Tambah Funfact')
@section('content')
        <div class="col-xl-12 col-lg-12 form-wrapper">
			<h1 class="content-title">Masukkan Data Fun Fact</h1>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Fun Fact</h4>
                </div>
                <div class="card-body">

                    @if($errors->any())
                        @foreach($errors->all() as $data)
                            <div class="alert alert-danger">
                                {{ $data }}
                            </div>
                        @endforeach
                    @endif
                    <div class="basic-form">
                        <form method="POST" action="{{ route('dashboard.funfact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Fun Fact</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control custom-txt-area" placeholder="Fun Fact" name="body" id="body" required></textarea>
                                </div>
                                @error('body')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

@endsection
