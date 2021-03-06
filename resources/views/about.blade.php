@extends('layouts.app')


@section('stylesheets')

    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 400px;  /* The width is the width of the web page */
        }
    </style>

@endsection

@section('title', 'About us')

@section('content')

    <!-- About -->

    <section class="section bg-light">
        <div class="container">
    <div id="map"></div>
    </div>
    </section>

@endsection

@section('scripts')

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {lat: -25.344, lng: 131.036};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 4, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9Ck2B_uMkKL5oXubxAaucEjpLUN-bQbw=initMap">
    </script>

@endsection