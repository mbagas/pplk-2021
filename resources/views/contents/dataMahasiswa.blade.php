@extends('layouts.header');

@section('content')
<div id="create" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('addMahasiswa') }}">
                    @csrf
                    <div class="form-group-custom">
                        <input type="text" name="nama" required="required">
                        <label class="control-label">Nama</label><i class="bar"></i>
                    </div>
    
                    <div class="form-group-custom">
                        <input type="text" name="nim" required="required">
                        <label class="control-label">NIM</label><i class="bar"></i>
                    </div>
    
                    <div class="form-group-custom">
                        <input name="email" id="email" required="required">
                        <label class="control-label">Email</label><i class="bar"></i>
                    </div>
    
                    <div class="form-group-custom">
                        <select name="role">
                            <option value="1">Admin</option>
                            <option value="2">Maba</option>
    
                        </select>
                        <label class="control-label">Role</label><i class="bar"></i>
                    </div>
    
                    <button type="submit" name="submit-btn" class="btn btn-success waves-effect waves-light btn-rounded pull-right">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Data Mahasiswa</h4>

            <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-12 mb-3">
                        <button class="btn btn-inverse waves-effect waves-light pull-right" data-toggle="modal" data-target="#create">
                            <span class="btn-label"><i class="ti ti-plus"></i>
                            </span>Tambah Mahasiswa</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                            <thead>
                                <tr role="row">
                                    <th style="width: 400px;">Nama</th>
                                    <th style="width: 400px;">Email</th>
                                    <th style="width: 400px;">Prodi</th>
                                    <th style="width: 100px;">Role</th>
                                    <th style="width: 200px;">Action</th>
                            </thead>


                            <tbody>   
                                @foreach($data as $result)  
                                <tr>
                                    <td>{{$result->name}}</td>
                                    <td>{{$result->email}}</td>
                                    <td>{{$result->prodi}}</td>
                                    <td>{{$result->role}}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Edit</a>
                                        <a href="#" class="btn btn-danger waves-effect waves-light">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                            <ul class="pagination">
                                {{ $data->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

