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
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function testCheckIfStoreMethodIsWorking(): void
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

    public function testIfPassTollMethodIsWorking(): void
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
            "type_id" => 1,
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
}
