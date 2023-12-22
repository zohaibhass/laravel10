@extends('layouts\adminlayout')
@section('dashboard_title', 'categories')
@section('dashboard_content')
    <div class='mx-3'>

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Food Categories</strong>
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

            @if (count($categories) > 0)
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th class="avatar">Image</th>

                                <th>Title</th>
                                <th>tag</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="serial">{{ $category->id }}</td>
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle"
                                                    src="{{ asset('storage/' . $category->image) }}" alt=""></a>
                                        </div>
                                    </td>

                                    <td> <span class="name">{{ $category->title }}</span> </td>
                                    <td> <span class="product">{{ $category->tag }}</span> </td>

                                    <td>
                                        <a href="#" class="btn btn-outline-info">update</a>

                                        <form action="{{ route('categories.destroy', ['category' => $category['id']]) }}"
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
