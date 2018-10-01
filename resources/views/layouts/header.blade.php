<header role="banner">
    <div class="top-bar" style="background-color: #2488C6">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-5">
                    <ul class="social list-unstyled">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-7 text-right">
                    <p class="mb-0">
                        <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Online Results</a></p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ URL::asset('citylab/img/logo.png') }}" alt="Girl in a jacket">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed("index") ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('services') ? 'active' : '' }}" href="{{ url('/services') }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                    </li>


                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="dropdown04">--}}
                            {{--<a class="dropdown-item" href="#">Institute</a>--}}
                            {{--<a class="dropdown-item" href="#">Departments</a>--}}
                            {{--<a class="dropdown-item" href="services.html">Services</a>--}}
                        {{--</div>--}}

                    {{--</li>--}}

                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="doctors.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="dropdown05">--}}
                            {{--<a class="dropdown-item" href="doctors.html">Find Doctors</a>--}}
                            {{--<a class="dropdown-item" href="#">Practitioner</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}




                </ul>
            </div>
        </div>
    </nav>
</header>