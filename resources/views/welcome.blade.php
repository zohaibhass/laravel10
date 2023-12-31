@extends('layouts.app')
@section('title', 'Peaks Platter')
@section('header', 'Peaks Platter')

@section('content')


    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam
                        ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                        duo justo magna dolore erat amet</p>
                    <a href="{{ route('show_availability') }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Schedule</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Peaks Platter</h5>
        <h1 class="mb-5">Services</h1>
    </div>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($services as $service)
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <div class="rounded-circle overflow-hidden m-4  ">
                                    <img class="img-fluid w-100" src="{{ asset('storage/' . $service->image) }}"
                                        style="max-height:100px; width: 100px;" alt="">
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


    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                @foreach ($menus as $menu )


                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('storage/'.$menu->image) }}" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>{{ $menu->title }}</span>
                                            <span class="text-primary">{{ $menu->price }}$</span>
                                        </h5>
                                        <small class="fst-italic">{{ $menu->description }}</small>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

@endsection
