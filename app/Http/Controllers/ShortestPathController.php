<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortestPathController extends Controller
{
    public function calculateDistance(Request $request)
    {
        // Validate the request data
        // $validatedData = $request->validate([
        //     'latitudeFrom' => 'required|numeric',
        //     'longitudeFrom' => 'required|numeric',
        //     'latitudeTo' => 'required|numeric',
        //     'longitudeTo' => 'required|numeric',
        // ]);

    
        // Retrieve the validated data
        $latitudeFrom = 27.7058;
        $longitudeFrom = 85.3208;
        $latitudeTo = 27.6564;
        $longitudeTo = 85.3420;
        // $latitudeFrom = $validatedData['latitudeFrom'];
        // $longitudeFrom = $validatedData['longitudeFrom'];
        // $latitudeTo = $validatedData['latitudeTo'];
        // $longitudeTo = $validatedData['longitudeTo'];

        // Haversine algorithm implementation
        $earthRadius = 6371; // Radius of the earth in kilometers

        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $deltaLat = $latTo - $latFrom;
        $deltaLon = $lonTo - $lonFrom;

        $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos($latFrom) * cos($latTo) * sin($deltaLon / 2) * sin($deltaLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;
        // dd($distance);
        return redirect('/')->with('distance', $distance);

        // return response()->json([
        //     'distance' => $distance,
        // ]);
    }
}
