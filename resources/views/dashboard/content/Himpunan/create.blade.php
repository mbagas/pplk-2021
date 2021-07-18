@extends('layouts.master')
@section('title', 'Tambah Himpunan')
@section('content')

<div class="col-lg-12 col-lg-12 form-wrapper">
    <h1 class="content-title">Masukkan Data Himpunan</h1>
  	<div class="card">
		<div class="card-header">
		<h4 class="card-title">Himpunan</h4>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('dashboard.himpunan.store') }}" enctype='multipart/form-data'>
			@csrf
				<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Nama Lengkap</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" id="namaLengkap" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Nama Singkat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama Singkat" name="namaSingkat" id="namaSingkat" required>
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
