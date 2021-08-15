@extends('layouts.master')
@section('title', 'Tambah User')
@section('content')
<div class="col-lg-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data User</h1>
    
    <!--small menu-->    
    
    <ul class="nav user-custom justify-content-center nav-pills" id="pills-tab" role="tablist">
        @if (Auth::user()->roles_id == 1)
        <li class="nav-item" role="presentation">
            <button type="button" id="pills-admin" data-bs-toggle="pill" data-bs-target="#admin" class="nav-link active" aria-selected="true" role="tab">
                Admin
            </button>
        </li>

        <li class="nav-item" role="presentation">
            <button type="button" id="pills-maba" data-bs-toggle="pill" data-bs-target="#maba" class="nav-link " aria-selected="false" role="tab">
                Mahasiswa Baru
            </button>
        </li>

        <li class="nav-item" role="presentation">
            <button type="button" id="pills-ormawa" data-bs-toggle="pill" data-bs-target="#ormawa" class="nav-link " aria-selected="false" role="tab">
                Ormawa
            </button> 
        </li>
        
        <li class="nav-item" role="presentation">
            <button type="button" id="pills-daplok" data-bs-toggle="pill" data-bs-target="#daplok" class="nav-link " aria-selected="false" role="tab">
                Daplok
            </button> 
        </li>

        @endif
    </ul>
  
    
    
    
    <!--form 1-->
    <div class="tab-content" id="pills-tabContent">
        @if (Auth::user()->roles_id == 1)
  
        <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="pills-admin">
            <div class="card justify-content-center">        
                <div class="card-header">
                    <h4 class="card-title">Admin</h4>
                </div>

                <div class="card-body">
                @if (Auth::user()->roles_id == '1')
                    <form method="POST" action="{{ route('dashboard.user.store') }}">
                @else
                    <form method="POST" action="{{ route('dashboardDaplokMentor.user.store') }}">
                @endif
                        @method('POST')
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                            <div class="col-md-9">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{ old('nama') }}" required autocomplete="off">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="off">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="off">

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
                                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="********" name="password_confirmation" required autocomplete="off">
                                @error('password_confirmation')
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
                                    @foreach ($roles as $data)
                                    <option value="{{$data->id}}">{{$data->role}} </option>
                                    @endforeach
                                </select>
                                @error('roles_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--form 2-->
        
        <div class="tab-pane fade" id="maba" role="tabpanel" aria-labelledby="pills-maba">
            <div class="card justify-content-center">        
                <div class="card-header">
                    <h4 class="card-title">Mahasiswa Baru</h4>
                </div>

                <div class="card-body">
                @if (Auth::user()->roles_id == '1')
                    <form method="POST" action="{{ route('dashboard.user.store') }}">
                @else
                    <form method="POST" action="{{ route('dashboardDaplokMentor.user.store') }}">
                @endif
                        @method('POST')
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                            <div class="col-md-9">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{ old('nama') }}" required autocomplete="off">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="off">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="off">

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
                                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="********" name="password_confirmation" required autocomplete="off">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-3 col-form-label">NIM</label>

                            <div class="col-md-9">
                                <input id="nim" type="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" name="nim" value="{{ old('nim') }}" >

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
                                    <option value="5">Maba </option>
                                </select>
                                @error('roles_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kelompok</label>
                            <div class="col-md-9">
                                <select name="kelompok" class="form-control wide" tabindex="0" required>
                                    @if(Auth::user()->roles_id == 1)
                                        <option value="">Pilih Kelompok </option>
                                        @for ($i = 1; $i <= 140; $i++)
                                            <option value="{{$i}}">{{$i}} </option>
                                        @endfor
                                    @else
                                    <option value="{{$kelompok}}">{{$kelompok}} </option>
                                    @endif
                                </select>
                                @error('kelompok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" name="instagram" class="form-control" value="" placeholder="pplk2021">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Prodi</label>
                            <div class="col-sm-9">
                                <select name="prodis_id" class="form-control wide" tabindex="0">
                                    <option value="">Pilih Prodi </option>
                                    @foreach ($prodis as $data)
                                        <option value="{{$data->id}}">{{$data->ormawas->namaLengkap}}</option>
                                    @endforeach
                                </select>
                                @error('prodis_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--form 3-->
        
        <div class="tab-pane fade" id="ormawa" role="tabpanel" aria-labelledby="pills-ormawa">
            <div class="card justify-content-center">        
                <div class="card-header">
                    <h4 class="card-title">Organisasi Mahasiswa</h4>
                </div>

                <div class="card-body">
                @if (Auth::user()->roles_id == '1')
                    <form method="POST" action="{{ route('dashboard.user.store') }}">
                @else
                    <form method="POST" action="{{ route('dashboardDaplokMentor.user.store') }}">
                @endif
                        @method('POST')
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                            <div class="col-md-9">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{ old('nama') }}" required autocomplete="off">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="off">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="off">

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
                                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="********" name="password_confirmation" required autocomplete="off">
                                @error('password_confirmation')
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
                                    <option value="6">Ormawa </option>
                                </select>
                                @error('roles_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kelompok</label>
                            <div class="col-md-9">
                                <input class="form-control wide" value="0">
                                @error('kelompok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--form 4-->
        
        <div class="tab-pane fade" id="daplok" role="tabpanel" aria-labelledby="pills-daplok">
            <div class="card justify-content-center">        
                <div class="card-header">
                    <h4 class="card-title">Pendamping Kelompok</h4>
                </div>

                <div class="card-body">
                @if (Auth::user()->roles_id == '1')
                    <form method="POST" action="{{ route('dashboard.user.store') }}">
                @else
                    <form method="POST" action="{{ route('dashboardDaplokMentor.user.store') }}">
                @endif
                        @method('POST')
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                            <div class="col-md-9">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{ old('nama') }}" required autocomplete="off">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="off">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="off">

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
                                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="********" name="password_confirmation" required autocomplete="off">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-3 col-form-label">NIM</label>

                            <div class="col-md-9">
                                <input id="nim" type="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" name="nim" value="{{ old('nim') }}" >

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
                                    <option value="3">Daplok/Mentor </option>
                                </select>
                                @error('roles_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kelompok</label>
                            <div class="col-md-9">
                                <select name="kelompok" class="form-control wide" tabindex="0" required>
                                    @if(Auth::user()->roles_id == 1)
                                        <option value="">Pilih Kelompok </option>
                                        @for ($i = 1; $i <= 140; $i++)
                                            <option value="{{$i}}">{{$i}} </option>
                                        @endfor
                                    @else
                                    <option value="{{$kelompok}}">{{$kelompok}} </option>
                                    @endif
                                </select>
                                @error('kelompok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" name="instagram" class="form-control" value="" placeholder="pplk2021">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Prodi</label>
                            <div class="col-sm-9">
                                <select name="prodis_id" class="form-control wide" tabindex="0">
                                    <option value="">Pilih Prodi </option>
                                    @foreach ($prodis as $data)
                                        <option value="{{$data->id}}">{{$data->ormawas->namaLengkap}}</option>
                                    @endforeach
                                </select>
                                @error('prodis_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
             
        @else
        <div class="tab-pane fade show active" id="maba" role="tabpanel" aria-labelledby="pills-maba">
            <div class="card justify-content-center">        
                <div class="card-header">
                    <h4 class="card-title">Mahasiswa Baru</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('dashboardDaplokMentor.user.store') }}">

                        @method('POST')
                        @csrf

                        <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                            <div class="col-md-9">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{ old('nama') }}" required autocomplete="off">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="off">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="off">

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
                                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="********" name="password_confirmation" required autocomplete="off">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-3 col-form-label">NIM</label>

                            <div class="col-md-9">
                                <input id="nim" type="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" name="nim" value="{{ old('nim') }}" >

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
                                    <option value="5">Maba </option>
                                </select>
                                @error('roles_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Kelompok</label>
                            <div class="col-md-9">
                                <select name="kelompok" class="form-control wide" tabindex="0" required>
                                    @if(Auth::user()->roles_id == 1)
                                        <option value="">Pilih Kelompok </option>
                                        @for ($i = 1; $i <= 140; $i++)
                                            <option value="{{$i}}">{{$i}} </option>
                                        @endfor
                                    @else
                                    <option value="{{$kelompok}}">{{$kelompok}} </option>
                                    @endif
                                </select>
                                @error('kelompok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" name="instagram" class="form-control" value="" placeholder="pplk2021">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Prodi</label>
                            <div class="col-sm-9">
                                <select name="prodis_id" class="form-control wide" tabindex="0">
                                    <option value="">Pilih Prodi </option>
                                    @foreach ($prodis as $data)
                                        <option value="{{$data->id}}">{{$data->ormawas->namaLengkap}}</option>
                                    @endforeach
                                </select>
                                @error('prodis_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
    
    
</div>
@endsection
