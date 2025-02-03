<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TollTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_method_works(): void
    {
        $response = $this->post('/api/tolls', [
            "name" => "testName",
            "city" => "testCity",
            "income" => 0
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "testName",
                    "city" => "testCity",
                    "income" => 0
                ]);
    }
}
