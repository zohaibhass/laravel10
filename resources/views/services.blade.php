@extends('layouts.app')
@section('title', ' services Peaks Platters')
@section('header', 'Peaks Platters')

@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Peak platters Services</h5>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($services_data as $service )


                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <div class="rounded-circle overflow-hidden m-4  ">
                                <img class="img-fluid w-100" src="{{ asset('storage/'.$service->image) }}" style="max-height:100px; width: 100px;" alt="">
                            </div>
                            {{-- <i class="fa fa-3x fa-user-tie text-primary mb-4"></i> --}}
                            <h5>{{ $service->title }}</h5>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
