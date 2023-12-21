@extends('layouts\adminlayout')
@section('dashboard_title', 'dashboard')
@section('dashboard_content')
    <div class='mx-3'>

        <div class="card">

            <div class="card-header">
                <strong class="card-title">Available  Services</strong>
            </div>
            @if (count($show_service)>0)
            <div class="table-stats order-table ov-h">
                @if (session('success'))

                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif




                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Image</th>

                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $show_service as $service )


                        <tr>

                            <td class="serial">{{  $service['id'] }}</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#">
                                        @if($service->image)
                                            <img class="rounded-circle" src="{{ asset('storage/' . $service->image) }}" alt="">
                                        @else
                                            <img class="rounded-circle" src="{{ asset('images/default.png') }}" alt="Default Image">
                                        @endif
                                    </a>
                                </div>
                            </td>

                            <td> <span class="name">{{  $service['title'] }}</span> </td>
                            <td> <span class="product">{{  $service['description'] }}</span> </td>

                            <td>
                                {{-- <a href="#" class="btn btn-outline-warning">update</a> --}}
                                <form action="{{ route('services.edit', ['service' => $service['id']]) }}" method="GET" style="display: inline;">
                                    @csrf
                                    @method('GET')

                                    <button type="submit" class="btn btn-outline-info" onclick="return confirm('Are you sure you want to update this service?')">update</button>
                                </form>
                                {{-- <a href="#" class="btn btn-outline-success">view</a> --}}
                                {{-- <a href="{{ route('services.destroy',['service' => $service['id']]) }}" class="btn btn-outline-danger">delete</a> --}}
                                <form action="{{ route('services.destroy', ['service' => $service['id']]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                                </form>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @else
                <div class="sufee-alert alert with-close alert-secondary mx-5 mt-5 alert-dismissible fade show">
                    <span class="badge badge-pill badge-secondary">Empty</span>
                    there is not available servce.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                @endif

            </div> <!-- /.table-stats -->
        </div>
    </div>
@endsection
