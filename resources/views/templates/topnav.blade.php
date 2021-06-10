<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                    <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                         data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </li>
                <!-- Sidenav toggler -->
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"--}}
{{--                       aria-expanded="false">--}}
{{--                        <div class="media align-items-center">--}}
{{--                            <div class="icon icon-shape text-white rounded-circle shadow">--}}
{{--                                <i class="ni ni-circle-08"></i>--}}
{{--                            </div>--}}
{{--                            <div class="media-body d-none d-lg-block">--}}
{{--                                <span class="mb-0 text-sm mr-3  font-weight-bold">{{session(0)->nama}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu  dropdown-menu-right ">--}}
{{--                        @if(session(0)->status == 'Pemeriksa')--}}
{{--                            <a href="{{route('edit_profile',session(0)->id_pemeriksa)}}" class="dropdown-item">--}}
{{--                                <i class="ni ni-atom"></i>--}}
{{--                                <span>Edit Profile</span>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="{{route('logout')}}" class="dropdown-item">--}}
{{--                            <i class="ni ni-user-run"></i>--}}
{{--                            <span>Logout</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
