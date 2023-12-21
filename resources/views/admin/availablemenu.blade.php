@extends('layouts\adminlayout')
@section('dashboard_title', 'menu')
@section('dashboard_content')
    <div class='mx-3'>

        <div class="card">
            <div class="card-header">
                <strong class="card-title">Avaliable Menu</strong>
            </div>
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
                        <tr>
                            <td class="serial">1.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg"
                                            alt=""></a>
                                </div>
                            </td>

                            <td> <span class="name">Louis Stanley</span> </td>
                            <td> <span class="product">iMax</span> </td>
                            <td> <span class="product">iMax</span> </td>
                            <td> <span class="product">iMax</span> </td>


                            <td>
                                <a href="#" class="btn btn-outline-info">update</a>
                                <a href="#" class="btn btn-outline-success">view</a>
                                <a href="#" class="btn btn-outline-danger">delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div>
@endsection
