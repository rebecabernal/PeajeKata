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
        // Aseguramos que un tipo de vehículo sea creado
        $vehicleType = VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        // Creamos el peaje
        Toll::create([
            "name" => "test",
            "city" => "test",
            "income" => 0
        ]);

        // Usamos el id del VehicleType previamente creado
        $vehicle = Vehicle::create([
            "type_id" => $vehicleType->id, // Aquí usamos el id del VehicleType
            "plate" => "test",
            "total_pay" => 0
        ]);

        // Realizamos la petición PUT
        $response = $this->put(route('apipasstoll', ['id' => $vehicle->id, 'tollId' => $vehicleType->id]));

        // Verificamos la respuesta
        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "test",
                    "income" => 100,
                    "plate" => "test",
                    "total_pay" => 100
                ]);
    }
}