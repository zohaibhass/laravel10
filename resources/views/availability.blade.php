@extends('layouts.app')
@section('title', 'availability')
@section('header', 'peaks platters')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10  text-center">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening & closing Schedule of peak Platters</h4>
            <table class="table table-bordered wow fadeInUp" data-wow-delay="0.1s">
                <thead>
                    <tr>
                        <th class="text-dark fw-normal">Day</th>
                        <th class="text-dark fw-normal">Open Time</th>
                        <th class="text-dark fw-normal">Close Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($availability as $ava)
                    <tr>
                        <td>{{ $ava->day }}</td>
                        <td>{{ $ava->open_time }}</td>
                        <td>{{ $ava->close_time }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
