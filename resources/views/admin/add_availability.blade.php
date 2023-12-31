@extends('layouts\adminlayout')
@section('dashboard_title', 'dashboard')
@section('dashboard_content')
    <div class="container mt-5 mx-4 ">
        <div class="card">
            <div class="card-header text-center">
                <strong>peaks platters</strong> <small>Add New Availability</small>
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
            <form action="{{ route('Availabilities.store') }}" method="POST">
                @csrf
                <div class="form-group col-md-6 mb-3">
                    <label class=" form-control-label">Day</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                        <input type="text" name="day" class="form-control">
                    </div>

                </div>

                <div class="form-group col-md-6 mb-3">
                    <label class=" form-control-label">open time</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                        <input type="time" name="opentime" class="form-control">
                    </div>

                </div>
                <div class="form-group col-md-6 mb-3">
                    <label class=" form-control-label">close time</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                        <input type="time" name="closetime" class="form-control">
                    </div>

                </div>
                <div class="text-center mb-2">
                    <button class="btn btn-outline-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>

@endsection
