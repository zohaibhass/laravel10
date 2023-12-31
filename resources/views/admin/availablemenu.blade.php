@extends('layouts\adminlayout')
@section('dashboard_title', 'menu')
@section('dashboard_content')
    <div class='mx-3'>

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Avaliable Menu</strong>
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
            @if (count($menu_data) > 0)


                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th class="avatar">Image</th>
                                <th>Title</th>
                                <th>price</th>
                                <th>category</th>
                                <th>Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menu_data as $menu)
                                <tr>
                                    <td class="serial">{{ $menu->id }}</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle"
                                                    src="{{ asset('storage/' . $menu->image) }}" alt=""></a>
                                        </div>
                                    </td>

                                    <td> <span class="name">{{ $menu->title }}</span> </td>
                                    <td> <span class="product">{{ $menu->price }}</span></td>
                                    <td>

                                        <span class="product">{{ $menu->categories->title }}</span>


                                    <td> <span class="product">{{ $menu->description }}</span> </td>


                                    <td>
                                        <form action="{{ route('Menus.edit', ['Menu' => $menu['id']]) }}" method="GET" enctype="multipart/form-data"
                                            style="display: inline;">
                                            @csrf
                                            @method('GET')

                                            <button type="submit" class="btn btn-outline-success"
                                                onclick="return confirm('Are you sure you want to delete this menu?')">Update</button>
                                        </form>

                                        <form action="{{ route('Menus.destroy', ['Menu' => $menu['id']]) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <div class="sufee-alert alert with-close alert-secondary mx-5 mt-5 alert-dismissible fade show">
                        <span class="badge badge-pill badge-secondary">Empty</span>
                        there is not menu.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
            @endif
        </div> <!-- /.table-stats -->
    </div>
    </div>
@endsection
