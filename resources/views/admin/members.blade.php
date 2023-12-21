@extends('layouts.adminlayout')
@section('dashboard_title', 'members')
@section('dashboard_content')



    <div class="row mt-5">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                        <h4 class="text-sm-center mt-2 mb-1">Steven Lee</h4>
                        <h5 class="text-sm-center mt-2 mb-1">position</h5>
                        <div class="location text-sm-center"><i class="fa fa-map-marker"></i> California, United States</div>
                    </div>
                    <hr>
                    <div class="card-text text-sm-center">

                        <p class="justify">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Sapiente nulla suscipit commodi error exercitationem debitis a quo dolorum
                            nam.
                           </p>

                    </div>
                    <div class="card-footer text-center mt-2">
                        <a href="#" class="btn btn-outline-info">update</a>
                        <a href="#" class="btn btn-outline-danger">delete</a>

                    </div>
                </div>

            </div>
        </div>




    </div>
@endsection
