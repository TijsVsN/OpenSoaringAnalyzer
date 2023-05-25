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
    <h1 class="font-bold text-lg">Track</h1>
    <div>
        <p>This is the track tab. Here you will find the info about your GPX track.</p>

       
        {{--Base info--}}
        <div class="w-96 h-fit p-2">
            <h1 class="font-bold text-base">Basic info</h1>
            <p>Name: <span class="font-semibold">{{ $GPXdata['name']}}</span></p> 
            <hr>
            <p>Desc: <span class="font-semibold">{{ $GPXdata['desc']}}</span></p>
            <hr>
            <p>From: <span class="font-semibold">{{ $GPXdata['From']}}</span></p>
            <p>To: <span class="font-semibold">{{ $GPXdata['To']}}</span></p>
        </div>
         {{--graph--}}
        <div>
            <h1></h1>

        </div>
    </div>
    </div>


</div>




@endsection

