@extends('layouts.adminlayout')
@section('dashboard_title', 'add service')
@section('dashboard_content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>peaks  platters</strong> <small>Add New Food Category</small>
        </div>
        <div class="card-body row card-block">
            <div class="form-group col-6">
                <label class=" form-control-label">title</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                    <input class="form-control">
                </div>
                <small class="form-text text-muted">must be short</small>
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
                <label class=" form-control-label">tag line</label>
                <div class="input-group">
                    <div class="input-group-addon choosen-choice"><i class="fa fa-align-justify"></i></div>
                    <textarea name="" class="col-10"></textarea>
                </div>
                <small class="form-text text-muted">two words only</small>
            </div>


        </div>
    </div>
</div>





@endsection
