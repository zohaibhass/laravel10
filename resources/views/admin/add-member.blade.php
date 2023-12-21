@extends('layouts.adminlayout')
@section('dashboard_title', 'add member')
@section('dashboard_content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>peaks  platters</strong> <small>Add New Member</small>
        </div>
        <div class="card-body row card-block">
            <div class="form-group col-6">
                <label class=" form-control-label">Name</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                    <input class="form-control">
                </div>

            </div>


            <div class="form-group col-6">
                <label class=" form-control-label">position</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                    <input class="form-control">
                </div>

            </div>

            <div class="form-group col-6">
                <label class=" form-control-label">Adress</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                    <input class="form-control">
                </div>

            </div>


            <div class="form-group col-6">
                <label class=" form-control-label">image</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-cloud-upload"></i></div>
                    <input type="file" class="form-control">
                </div>
                <small class="form-text text-muted">not greater than 2mb</small>
            </div>

            <div class="form-group col-6">
                <label class=" form-control-label">Description</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-align-justify"></i></div>
                    <textarea class="form-control"></textarea>
                </div>
                <small class="form-text text-muted">short and precise</small>
            </div>


        </div>
    </div>
</div>

@endsection
