@extends('layouts\adminlayout')
@section('dashboard_title', 'categories')
@section('dashboard_content')
    <div class='mx-3'>

        <div class="card">
            <div class="card-header">
                <strong class="card-title">peaks platters availability</strong>
            </div>

            @if (session('success'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif

            @if (count($availability_data) > 0)
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th class="">Day</th>

                                <th>Open Time</th>
                                <th>Close Time</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($availability_data as $availality)
                                <tr>
                                    <td class="serial">{{ $availality->id }}</td>
                                    <td class="">
                                        <span class="name">{{ $availality->day }}</span>
                                    </td>

                                    <td> <span class="name">{{ $availality->open_time }}</span> </td>
                                    <td> <span class="product">{{ $availality->close_time }}</span> </td>

                                    <td>
                                        <form action="{{ route('Availabilities.edit', ['Availability' => $availality['id']]) }}"
                                            method="GET" style="display: inline;" enctype="multipart/form-data">
                                            @csrf
                                            @method('GET')

                                            <button type="submit" class="btn btn-outline-success"
                                                onclick="return confirm('Are you sure you want to update this service?')">update</button>
                                            </form>

                                        <form action="{{ route('Availabilities.destroy', ['Availability' => $availality['id']]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                                            </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="sufee-alert alert with-close alert-secondary mx-5 mt-5 alert-dismissible fade show">
                        <span class="badge badge-pill badge-secondary">Empty</span>
                        Availability not found.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
            @endif
        </div> <!-- /.table-stats -->
    </div>
    </div>
@endsection
