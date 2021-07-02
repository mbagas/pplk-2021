@extends('layouts.master')
@section('title', 'Edit Funfact')
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
                        <form method="POST" action="{{route('dashboard.funfact.update', $funfact)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Fun Fact</label>
                                <div class="col-sm-9">
                                    <textarea name="body" class="form-control custom-txt-area" placeholder="Fun Fact" id="body" value="" required disabled>{{$funfact->body}}</textarea>
                                </div>
                                @error('body')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary " >Simpan</button>
                                    <button type="button" class="btn btn-outline-primary " onclick="editData()">Edit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

@endsection

@section('script')
<script>
    function editData() {   
        document.getElementById('body').disabled = false;
    }
</script>
@endsection