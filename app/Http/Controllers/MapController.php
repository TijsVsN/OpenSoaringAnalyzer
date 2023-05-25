<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpGPX\phpGPX;
use Illuminate\Support\Facades\Storage;

use app\Models\gpx;

class MapController extends Controller
{
    public function view() {
        return view("index");
    }

    public function upload(Request $request) {
        //Validate the file.
        $request->validate(
            ['file' => 'required|file']
        );
        //Storing it in the public directory.
        $gpx_file = $request->file('file');
        $path = $gpx_file->storeAs('public', $gpx_file->GetClientOriginalName());

        //Loads the GPX using php's building simplexml libary
        $xmlFile = file_get_contents(public_path('storage/' .  basename($path)));
        $xml = simplexml_load_string($xmlFile);
        
        //Loading the basic data. 
        $data = [];

        $name = (string) $xml->metadata->name;
        $desc = (string) $xml->metadata->desc;

        //Get boths airport codes and names and then adds them to create the final 'name'
        $startAirportCode = (string) $xml->trk->extensions->FlightMetadata->FirstAirport->Code;
        $endAirportCode = (string) $xml->trk->extensions->FlightMetadata->LastAirport->Code;

        $startAirportName = (string) $xml->trk->extensions->FlightMetadata->FirstAirport->Name;
        $endAirportName = (string) $xml->trk->extensions->FlightMetadata->LastAirport->Name;

        $startAirport = $startAirportCode . ', ' . $startAirportName;
        $endAirport = $endAirportCode . ', ' . $endAirportName;


        $data = [
            'name' => $name,
            'desc' => $desc,
            'From' => $startAirport,
            'To' => $endAirport 
        ];

        

        //Weghalen van de GPX van der server om ruimte te besparen
        Storage::delete($gpx_file->getClientOriginalName());
        return redirect('/app')->with('data', $data);
        
        
        

    }

    public function app (Request $request) {
        //Gets the data from the session
        $data = $request->session()->get('data');
        $GPXdata = $data;
        // print_r($data);
        return view('app')->with('GPXdata', $GPXdata);        // return view('app', compact('GPXdata'));
    }
}
