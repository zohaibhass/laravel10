<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Project</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Styles -->
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">New Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>




                </ul>
                <div class="text-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class=" mx-2 mb-2  btn btn-primary">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="mx-2 mb-2 btn btn-primary">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif



                </div>
            </div>
        </div>
    </nav>


    {{-- <nav class=" navbar-dark bg-dark">
        <h5 class="mt-2 text-light">New Project</h5>
        <div class="text-end">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class=" mx-2 mb-2  btn btn-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mx-2 mb-2 btn btn-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



        </div>
    </nav> --}}
</body>

</html>
