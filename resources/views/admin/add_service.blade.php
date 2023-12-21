@extends('layouts.adminlayout')
@section('dashboard_title', 'add service')
@section('dashboard_content')

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <strong>peaks platters</strong> <small>Add New Service</small>
            </div>
            @if (session('success'))
                <div class="sufee-alert alert with-close alert-success mx-5 mt-3 alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body row card-block">
                    @csrf


                    <div class="form-group col-6">
                        <label class=" form-control-label">title</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                            <input name="title" class="form-control">

                        </div>
                        @error('title')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group col-6">
                        <label class=" form-control-label">image</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-cloud-upload"></i></div>
                            <input name="image" type="file" class="form-control">
                        </div>
                        @error('image')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label class=" form-control-label">Description</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-align-justify"></i></div>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        @error('description')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                </div>
                <div class="text-right mx-3 mb-3">
                    <input class="btn btn-outline-primary" type="submit" value="Add Service">
                </div>
            </form>
        </div>

    </div>

@endsection
