<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VehicleTest extends TestCase
{
    use RefreshDatabase;

    public function testIfIndexMethodIsWorking(): void
    {
        $this->withoutExceptionHandling();

        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        Vehicle::create([
            "type_id" => 1,
            "plate" => "1234ASD",
            "total_pay" => 0
        ]);

        $response = $this->get('/vehicles');

        $response->assertStatus(200);
    }
}
