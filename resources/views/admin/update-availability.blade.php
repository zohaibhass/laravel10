@extends('layouts\adminlayout')
@section('dashboard_title', 'dashboard')
@section('dashboard_content')
<div class=" card p-5 container mt-5 mx-3 mb-3">
    <h2 class="mb-4">Set Daily Availability</h2>

    <form>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="mondayStartTime" class="form-label">Monday Start Time</label>
                <input type="time" class="form-control" id="mondayStartTime" name="mondayStartTime" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="mondayEndTime" class="form-label">Monday End Time</label>
                <input type="time" class="form-control" id="mondayEndTime" name="mondayEndTime" required>
            </div>
        </div>

        <!-- Repeat the above block for each day of the week -->

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Set Daily Availability</button>
            </div>
        </div>
    </form>
</div>

@endsection
