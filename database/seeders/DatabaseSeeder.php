<?php

namespace Database\Seeders;

use App\Models\Toll;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Toll::create([
            "name" => "Guarromán",
            "city" => "Málaga",
            "earnings" => 0
        ]);

        Toll::create([
            "name" => "Villanueva del Trabuco",
            "city" => "Málaga",
            "earnings" => 0
        ]);

        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        VehicleType::create([
            "type" => "motorbike",
            "price" => 50
        ]);

        VehicleType::create([
            "type" => "2 axle truck",
            "price" => 100
        ]);

        VehicleType::create([
            "type" => "3 axle truck",
            "price" => 150
        ]);

        VehicleType::create([
            "type" => "4 axle truck",
            "price" => 200
        ]);

        VehicleType::create([
            "type" => "5 axle truck",
            "price" => 250
        ]);

        $car = Vehicle::create([
            "type_id" => 1,
            "license" => "7996HID",
            "total_expense" => 0
        ]);

        $bike = Vehicle::create([
            "type_id" => 2,
            "license" => "6483UGG",
            "total_expense" => 0
        ]);

        $truck1 = Vehicle::create([
            "type_id" => 3,
            "license" => "8882KOS",
            "total_expense" => 0
        ]);

        $truck2 = Vehicle::create([
            "type_id" => 4,
            "license" => "6372MND",
            "total_expense" => 0
        ]);

        $truck3 = Vehicle::create([
            "type_id" => 5,
            "license" => "1998PGS",
            "total_expense" => 0
        ]);

        $truck4 = Vehicle::create([
            "type_id" => 6,
            "license" => "1083HJB",
            "total_expense" => 0
        ]);
    }
}