@extends('layouts\adminlayout')
@section('dashboard_title', 'members')
@section('dashboard_content')
    <div class='mx-3'>

        <div class="card">
            <div class="card-header text-center">
                <strong class="card-title">Avaliable Members</strong>
            </div>

            @if (session('success'))
                <div class=" mt-3 mx-2 -bottom-3sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Success</span>
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if (count($member_data) > 0)


                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th class="avatar">Image</th>
                                <th>name</th>
                                <th>posiion</th>
                                <th>Adress</th>
                                <th>Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($member_data as $member)
                                <tr>
                                    <td class="serial">{{ $member->id }}</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle"
                                                    src="{{ asset('storage/' . $member->image) }}" alt=""></a>
                                        </div>
                                    </td>

                                    <td> <span class="name">{{ $member->name }}</span> </td>
                                    <td> <span class="product">{{ $member->position }}</span></td>
                                    <td>

                                        <span class="product">{{ $member->adress }}</span>


                                    <td> <span class="product">{{ $member->description }}</span> </td>


                                    <td>
                                        <form action="{{ route('Members.edit', ['Member' => $member['id']]) }}"
                                            method="GET" enctype="multipart/form-data" style="display: inline;">
                                            @csrf
                                            @method('GET')

                                            <button type="submit" class="btn btn-outline-success"
                                                onclick="return confirm('Are you sure you want to update this member?')">Update</button>
                                        </form>

                                        <form action="{{ route('Members.destroy', ['Member' => $member['id']]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this member?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <div class="sufee-alert alert with-close alert-secondary mx-5 mt-5 alert-dismissible fade show">
                        <span class="badge badge-pill badge-secondary">Empty</span>
                        there is not a Member.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
            @endif
        </div> <!-- /.table-stats -->
    </div>
    </div>
@endsection
