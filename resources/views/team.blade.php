@extends('layouts.app')
@section('title','our team')
@section('header','peaks platters')
@section('content')
<!-- Team Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Members</h1>
        </div>
        <div class="row g-4">
            @foreach ($show_data as $data )


            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden  " style="max-height: 400px;">
                    <div class="rounded-circle overflow-hidden m-4  style="height: 50px; width: 150px;">
                        <img class="img-fluid w-100" src="{{ asset('storage/'.$data->image) }}" style="max-height:200px;" alt="">
                    </div>
                    <h5 class="mb-0">{{ $data->name }}</h5>
                    <i class="fa fa-tags"></i><b class="mx-2">{{ $data->position }}</b><br>
                    <i class="fa fa-map-marker"></i><b class="mx-2">{{ $data->adress }}</b>
                    <p>{{ $data->description }}</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @endforeach






        </div>
    </div>
</div>
<!-- Team End -->
@endsection
