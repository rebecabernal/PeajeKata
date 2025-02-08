<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Toll;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;

    public function test_check_if_store_method_works(): void
    {
        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        $response = $this->post('/api/vehicles', [
            "type_id" => 1,
            "plate" => "test",
            "total_pay" => 0
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "type_id" => 1,
                    "plate" => "test",
                    "total_pay" => 0
                ]);
    }

   /*  public function test_if_pass_toll_method_works(): void
    {
        Toll::create([
            "name" => "test",
            "city" => "test",
            "income" => 0
        ]);

        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        Vehicle::create([
            "type_id" => $vehic,
            "plate" => "test",
            "total_pay" => 0
        ]);

        $response = $this->put(route('apipasstoll', ['id' => 1, 'tollId' => 1]));


        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "test",
                    "income" => 100,
                    "plate" => "test",
                    "total_pay" => 100
                ]);
    }
} */
    public function test_if_pass_toll_method_works(): void
    {

        $vehicleType = VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);


        Toll::create([
            "name" => "test",
            "city" => "test",
            "income" => 0
        ]);


        $vehicle = Vehicle::create([
            "type_id" => $vehicleType->id, 
            "plate" => "test",
            "total_pay" => 0
        ]);


        $response = $this->put(route('apipasstoll', ['id' => $vehicle->id, 'tollId' => $vehicleType->id]));


        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "test",
                    "income" => 100,
                    "plate" => "test",
                    "total_pay" => 100
                ]);
    }
}