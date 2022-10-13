<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Restaurant HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

    {{-- tostr --}}
    <link rel="stylesheet" href="{{ asset('admin/asset/plugins/toastr/toastr.min.css') }}">
    @php
       use Carbon\Carbon;
    @endphp

</head>

<body>

    <!-- Header -->
    <header id="header">


        <div class="shadow d-flex justify-content-lg-center">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid ">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-lg-2 ">
                                <a class="nav-link ps-md-2 text-light" aria-current="page" href="{{route('web.home')}}">Home</a>
                            </li>
                           
                            <li class="nav-item mx-lg-2 ">
                                <a class="nav-link ps-md-2 text-light" href="{{route('web.home')}}#menu"> Menu </a>
                            </li>
                            <li class="nav-item mx-lg-2 ">
                                <a class="nav-link ps-md-2 text-light" href="{{route('web.home')}}#events"> Special Event </a>
                            </li>
                            <li class="nav-item ps-md-2 mx-lg-2 ">
                                <a href="{{ route('web.stepOne') }}" class="nav-link text-light ">Reservation</a>
                            </li>
                            <li class="nav-item ps-md-2 mx-lg-2 ">
                                <a href="{{route('web.contact')}}" class="nav-link text-light "> Contact </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>




    </header>




    @yield('content')











    <!-- Footer -->
    <footer id="footer">

        <!-- container -->
        <div class="container pt-3">

            <!-- row -->
            <div class="row">

                <!-- copyright -->
                <div class="col-md-6">

                    <div class="d-flex justify-content-center align-items-center py-3">
                        <span class="copyright text-light">Copyright @2022 All rights reserved <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a class="text-light"
                                href="https://www.linkedin.com/in/md-mujibur-rahman-b652a8240/" target="_blank">
                                <b>Mujibur</b> </a></span>
                    </div>

                </div>
                <!-- /copyright -->

                <!-- footer nav -->
                <div class="col-md-6">
                    <nav class="footer-nav">
                        <a href="@if($settings->count() > 0){{$settings->pinterest}} @endif" target="blank" class="btn btn-info rounded-circle"><i class="fa fa-pinterest text-light" aria-hidden="true"></i></a>
                        <a href="@if($settings->count() > 0){{$settings->facebook}} @endif" target="blank" class="btn btn-primary rounded-circle"><i class="fa fa-facebook-square text-light" aria-hidden="true"></i></a>
                        <a href="@if($settings->count() > 0){{$settings->twitter}} @endif" target="blank" class="btn btn-info rounded-circle"><i class="fa fa-twitter text-light" aria-hidden="true"></i></a>
                        <a href="@if($settings->count() > 0){{$settings->eventName}} @endif" target="blank" class="btn btn-warning rounded-circle"><i class="fa fa-google-plus-official text-light" aria-hidden="true"></i></a>
                        <a href="@if($settings->count() > 0){{$settings->linkedin}} @endif" target="blank" class="btn btn-success rounded-circle"><i class="fa fa-linkedin-square text-light" aria-hidden="true"></i></a>
                        <a href="@if($settings->count() > 0){{$settings->instagram}} @endif" target="blank" class="btn btn-light rounded-circle"><i class="fa fa-instagram text-success" aria-hidden="true"></i></a>


                    </nav>
                </div>
                <!-- /footer nav -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
    {{-- tostrs --}}
    <script src="{{ asset('admin/asset/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('delete'))
            toastr.delete("{{ Session::get('delete') }}");
        @endif
    </script>
</body>

</html>
