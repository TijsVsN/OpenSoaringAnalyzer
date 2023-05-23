@extends('layout')

@section('content')

{{--Main layout --}}
<div class="w-full h-screen">

{{--Map--}}
<div class="h-4/6">
<div id="map" class="h-full"></div>
<script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    map.invalidateSize();

    </script>
</div>

{{--Settings tab--}}
<div class="border border-black w-full h-fit pl-5">
    <h1 class="font-bold text-base">Settings</h1>
    <div>
        <p>This is the settings tab. Here you will upload your path, and adjust settings.</p>
    </div>
    </div>


</div>




@endsection

