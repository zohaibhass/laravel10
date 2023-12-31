@extends('layouts.adminlayout')
@section('dashboard_title', 'update menu')
@section('dashboard_content')

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <strong>peaks platters</strong> <small>Add New menu</small>
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
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body row card-block">
                    <div class="form-group col-6">
                        <label class=" form-control-label">title</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                            <input name="title" value="{{$menudata->title  }}" class="form-control">
                        </div>
                       @error('title')
                           <span class="alert alert-danger" >{{ $message }}</span>
                       @enderror
                    </div>
                    <div class="form-group col-6">
                        <label class=" form-control-label">image</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-cloud-upload"></i></div>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('storage'.$menudata->image) }}" alt="">
                        </div>
                        @error('image')
                        <span class="alert alert-danger" >{{ $message }}</span>
                    @enderror
                    </div>


                    <div class="form-group col-6">
                        <label class=" form-control-label">Category</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-bars"></i></div>


                            <select class="form-control" name="category" id="">

                                @foreach ($menudata as $category)
                                    <option name="category" value="{{ $category->categories->id }}">{{ $category->categories->title }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="alert alert-danger" >{{ $message }}</span>
                        @enderror

                        </div>

                    </div>

                    <div class="form-group col-6">
                        <label class=" form-control-label">price</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                            <input type="number" value="{{ $menudata->price }}" name="price" class="form-control">
                        </div>
                        @error('price')
                        <span class="alert alert-danger" >{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="form-group col-6">
                        <label class=" form-control-label">Description</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-align-justify"></i></div>
                            <textarea class="form-control" name="description">{{ $update_data->description }}</textarea>
                        </div>
                        @error('description')
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
