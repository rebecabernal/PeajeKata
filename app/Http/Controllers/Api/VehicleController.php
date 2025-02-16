<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function goThroughToll(string $id, string $toll_id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->tolls()->attach([(int)$toll_id]);
        $toll = $vehicle->tolls()->find($toll_id);

        $vehicle->update(["total_pay" => $vehicle->total_pay + $vehicle->vehicleType->price]);
        $toll->update(["income" => $toll->income + $vehicle->vehicleType->price]);

        return response()->json([
            "name" => $toll->name,
            "income" => $toll->income,
            "plate" => $vehicle->plate,
            "total_pay" => $vehicle->total_pay
        ], 200);
    }

    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            "type_id" => $request->type_id,
            "plate" => $request->plate,
            "total_pay" => $request->total_pay
        ]);

        return response()->json($vehicle, 200);
    }
}