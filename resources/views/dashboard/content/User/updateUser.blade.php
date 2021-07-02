@extends('layouts.master')
@section('title', 'Update Akun')
@section('content')
<div class="col-lg-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Perbarui Data User</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">User</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('dashboard.user.update', $result->id) }}">
                @method('PUT')
                @csrf

                <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">{{ __('Nama') }}</label>
                    <div class="col-md-9">
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" 
                            name="nama" value="{{ $result->nama }}" required autocomplete="off"  disabled id="nama">
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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" 
                            name="email" value="{{ $result->email }}" required autocomplete="off" disabled id="email">

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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" 
                            name="password" value="{{ $result->password }}" required autocomplete="off" disabled id="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nim" class="col-sm-3 col-form-label">NIM</label>

                    <div class="col-md-9">
                        <input id="nim" type="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM" 
                            name="nim" value="{{ $result->nim }}"  disabled id="nim">

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
                        <select name="roles_id" class="form-control wide" tabindex="0" required disabled id="role">
                            <option value="{{ $result->roles_id }}">{{ $result->roles->role }}</option>
                            @foreach ($role as $data)
                            <option value="{{$data->id}}">{{$data->role}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Kelompok</label>
                    <div class="col-md-9">
                        <select name="kelompok" class="form-control wide" tabindex="0" required disabled id="kelompok">
                            <option value="{{$result->kelompok}}">{{$result->kelompok}} </option>
                            @for ($i = 1; $i <= 100; $i++)
                                <option value="{{$i}}">{{$i}} </option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Instagram</label>
                    <div class="col-md-9">
                        <input type="text" name="instagram" class="form-control" value="{{ $result->instagram }}" placeholder="pplk2021" disabled id="instagram">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Prodi</label>
                    <div class="col-sm-9">
                        <select name="prodis_id" class="form-control wide" tabindex="0" disabled id="prodi">
                            <option value="{{ $result->prodis_id }}">{{ $result->prodis->ormawas->namaLengkap }}</option>
                            @foreach ($prodi as $data)
                                <option value="{{$data->id}}">{{$data->ormawas->namaLengkap}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-outline-primary " onclick="editData()">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
	function editData() {   
		document.getElementById('nama').disabled = false;
		document.getElementById('email').disabled = false;
		document.getElementById('password').disabled = false;
		document.getElementById('nim').disabled = false;
		document.getElementById('role').disabled = false;
		document.getElementById('kelompok').disabled = false;
		document.getElementById('instagram').disabled = false;
		document.getElementById('prodi').disabled = false;
	}
</script>
@endsection