@extends('layouts.adminlayout')
@section('dashboard_title', 'update member')
@section('dashboard_content')

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <strong>peaks platters</strong> <small>Update Member</small>
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
            <form action="{{ route('Members.update',['Member'=>$member_data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-body row card-block">
                    <div class="form-group col-6">
                        <label class=" form-control-label">Name</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                            <input name="name" value="{{$member_data->name }}" class="form-control">
                        </div>
                       @error('name')
                           <span class="alert alert-danger" >{{ $message }}</span>
                       @enderror
                    </div>



                    <div class="form-group col-6">
                        <label class=" form-control-label">position</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-bars"></i></div>

                            <input type="text" value="{{ $member_data->position}}" name="position" class="form-control">
                            @error('category')
                            <span class="alert alert-danger" >{{ $message }}</span>
                        @enderror

                        </div>

                    </div>

                    <div class="form-group col-6">
                        <label class=" form-control-label">adress</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                            <input type="text" value="{{ $member_data->adress }}" name="adress" class="form-control">
                        </div>
                        @error('adress')
                        <span class="alert alert-danger" >{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="form-group col-6">
                        <label class=" form-control-label">Description</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-align-justify"></i></div>
                            <textarea class="form-control" name="description">{{ $member_data->description }}</textarea>
                        </div>
                        @error('description')
                        <span class="alert alert-danger" >{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-group col-6">
                        <label class=" form-control-label">image</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-cloud-upload"></i></div>
                            <input type="file" name="image" class="form-control">

                        </div>
                        <img style="height: 100px;width:100px;" src="{{ asset('storage/'.$member_data->image) }}" alt="">
                        @error('image')
                        <span class="alert alert-danger" >{{ $message }}</span>
                    @enderror
                    </div>

                </div>
                <div class="text-right  mx-3 mb-3">
                    <input class=" mb-5 btn btn-outline-primary" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>

@endsection
