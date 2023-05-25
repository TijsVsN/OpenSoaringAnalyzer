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
        {{--Upload Form--}}
        <div class=" bg-slate-100 w-fit h-fit rounded-lg p-2" id="Form">
            <form action="/upload" method="post" enctype="multipart/form-data" id="Form" onsubmit="document.getElementById('Form').style.display = 'none';">
            @csrf
            <label for="gpx"><input type="file" name="file" id="file"></label> <br>
            <input type="submit" value="Upload" class=" bg-slate-600 text-white mt-2 rounded">
            </form>
        </div>
    </div>
    </div>


</div>




@endsection

