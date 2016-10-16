@extends('layouts.app')
@section('content')
    <!-- map container -->
    <div id="map"></div>      

    {{ Html::script('js/map.js') }}
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap" async defer></script>
@endsection


