@extends('layouts.master')
@section('title', 'Register Akun')
@section('content')
<div class="col-lg-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Data User</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('Register') }}</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('dashboard.register') }}">
                @csrf

                <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                    <div class="col-md-9">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{ old('name') }}" required autocomplete="name">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-9">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password" class="col-sm-3 col-form-label">{{ __('Password') }}</label>

                    <div class="col-md-9">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password-confirm" class="col-sm-3 col-form-label">{{ __('Confirm Password') }}</label>

                    <div class="col-md-9">
                        <input id="password-confirm" type="password" class="form-control" placeholder="********" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nim" class="col-sm-3 col-form-label">NIM</label>

                    <div class="col-md-9">
                        <input id="nim" type="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" name="nim" value="" required >

                        @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Role</label>
                    <div class="col-md-9">
                        <select name="roles_id" class="form-control wide" tabindex="0" required>
                            <option value="1">Admin</option>
                            <option value="2">MABA</option>
                            <option value="3">DAPLOK/MENTOR</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Kelompok</label>
                    <div class="col-md-9">
                        <select name="kelompok" class="form-control wide" tabindex="0" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Instagram</label>
                    <div class="col-md-9">
                        <input type="text" name="instagram" class="form-control" value="" placeholder="pplk2021" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Prodi</label>
                    <div class="col-sm-9">
                        <select name="prodis_id" class="form-control wide" tabindex="0" required>
                            @foreach ($prodi as $data)
                                <option value="{{$data->id}}">{{$data->ormawas->namaLengkap}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
