<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donorform;

class ShortestPathController extends Controller
{
    public function calculateDistance(Request $request)
    {
        // Save the user's location in the database
        $user = new Donorform();
        $user->Name = $request->input('Name');
        $user->Email = $request->input('Email');
        $user->Age = $request->input('Age');
        $user->Address = $request->input('Address');
        $user->Group = $request->input('Group');
        $user->Latitude = $request->input('Latitude');
        $user->Longitude = $request->input('Longitude');
        $user->save();

        // Retrieve all donors from the database
        $donors = Donorform::where('Group', $request->input('Group'))->get();

        // Retrieve the user's latitude and longitude from the request
        $latitudeFrom = $request->input('Latitude');
        $longitudeFrom = $request->input('Longitude');

        // Haversine algorithm implementation
        function calculateDistance($latFrom, $lonFrom, $latTo, $lonTo)
        {
            $earthRadius = 6371; // Radius of the earth in kilometers

            $latFromRad = deg2rad($latFrom);
            $lonFromRad = deg2rad($lonFrom);
            $latToRad = deg2rad($latTo);
            $lonToRad = deg2rad($lonTo);

            $deltaLat = $latToRad - $latFromRad;
            $deltaLon = $lonToRad - $lonFromRad;

            $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos($latFromRad) * cos($latToRad) * sin($deltaLon / 2) * sin($deltaLon / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

            $distance = $earthRadius * $c;
            return $distance;
        }

        // Loop through each donor and calculate the distance
        $distances = [];
        foreach ($donors as $donor) {
            $latitudeTo = $donor->Latitude;
            $longitudeTo = $donor->Longitude;
            $distance = calculateDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo);

            // Add the distance and donor data to the array
            $distances[] = [
                'donor' => $donor,
                'distance' => $distance,
            ];
        }

        // Sort the array based on distances (shortest distance first)
        usort($distances, function ($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });

        // Display the results
        // dd($distances);

        // Pass $distances to your view for displaying the data
        return view('frontend.data', ['distances' => $distances]);
    }
}
