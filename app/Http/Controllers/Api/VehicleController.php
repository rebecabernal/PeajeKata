<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function goThroughToll(string $id, string $tollId)
    {
       $vehicle = Vehicle::find($id);
       $vehicle->tolls()->attach([(int)$tollId]);
       $toll = $vehicle->tolls()->find($tollId);

       $vehicle->update(["spent" => $vehicle->spent + $vehicle->vehicleType->price]);
       $toll->update(["income" => $toll->income + $vehicle->vehicleType->price]);

       return response()->json([
        "toll_name" => $toll->name, 
        "toll_income" => $toll->income,
        "vehicle_registration" => $vehicle->registration,
        "vehicle_spent" => $vehicle->spent
       ], 200);
    }

    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            "vehicle_type_id" => $request->vehicle_type_id,
            "registration" => $request->registration,
            "spent" => 0
        ]);
        
        return response()->json($vehicle, 200);
    }
}
