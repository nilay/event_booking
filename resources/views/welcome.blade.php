@extends('layouts.app')
@section('content')
    <div id="map"></div>      

    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 40.73, lng: -73.93},
                zoom: 12
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap" async defer></script>
@endsection


