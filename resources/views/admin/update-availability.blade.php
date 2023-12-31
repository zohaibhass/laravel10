@extends('layouts\adminlayout')
@section('dashboard_title', 'dashboard')
@section('dashboard_content')
<div class="container mt-5">
    <h2 class="mb-4">Hotel Timing Update Form</h2>

    <form action="{{ route('Availabilities.update',['Availability'=>$update_data->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="day">Day</label>
                <select class="form-control" id="day" name="day" required>
                    <option value="" disabled selected>Select a day</option>
                    @foreach ($update_data as $day )


                    <option value="{{ $day->id }}">{{ $day->day }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="openTime">Opening Time</label>
                <input type="time" class="form-control" value="{{ $update_data->open_time }}" id="openTime" name="opentime" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="closeTime">Closing Time</label>
                <input type="time" class="form-control" id="closeTime" value="{{ $update_data->close_time }}" name="closetime" required>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Update Timing</button>
    </form>
</div>

@endsection
