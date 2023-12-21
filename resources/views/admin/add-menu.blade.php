@extends('layouts.adminlayout')
@section('dashboard_title', 'add service')
@section('dashboard_content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>peaks  platters</strong> <small>Add New menu</small>
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
                <label class=" form-control-label">Category</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-bars"></i></div>

                        <select class="form-control" name="" id="">
                            <option value="" selected>select food category</option>
                           <option value="">local</option>
                           <option value="">chinese</option>
                           <option value="">pakistani</option>
                        </select>

                </div>
                <small class="form-text text-muted">must be short</small>
            </div>

            <div class="form-group col-6">
                <label class=" form-control-label">price</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                    <input type="number" class="form-control">
                </div>
                <small class="form-text text-muted">must be short</small>
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
