@extends('layouts.master')
@section('title', 'Edit Funfact')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit FunFact</h4>
                </div>
                <div class="card-body">

                    @if($errors->any())
                        @foreach($errors->all() as $data)
                            <div class="alert alert-danger">
                                {{ $data }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{route('dashboard.funfact.update', $funfact)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 row form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control" id="body" rows="5" required>{{$funfact->body}}</textarea>
                            @error('body')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Edit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
