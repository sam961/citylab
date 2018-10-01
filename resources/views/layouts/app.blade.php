<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">



    <link rel="stylesheet" href="{{ URL::asset('citylab/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('citylab/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('citylab/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('citylab/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('citylab/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('citylab/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('citylab/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('citylab/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('citylab/css/_custom.css') }}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ URL::asset('citylab/css/style.css') }}">


    @yield('stylesheets')

</head>
<body>

    <!-- Header -->
    @include('layouts.header')

    {{--Content--}}
    @yield('content');

    <!-- Footer -->
    {{--@include('layouts.footer')--}}

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="citylab/js/jquery-3.2.1.min.js"></script>
<script src=" {{ URL::asset('citylab/js/popper.min.js') }}"></script>
<script src=" {{ URL::asset('citylab/js/bootstrap.min.js') }}"></script>
<script src=" {{ URL::asset('citylab/js/owl.carousel.min.js') }}"></script>
<script src=" {{ URL::asset('citylab/js/bootstrap-datepicker.js') }}"></script>
<script src=" {{ URL::asset('citylab/js/jquery.timepicker.min.js') }}"></script>
<script src=" {{ URL::asset('citylab/js/jquery.waypoints.min.js') }}"></script>
<script src=" {{ URL::asset('citylab/js/main.js') }}"></script>

    @yield('scripts')

</body>
</html>