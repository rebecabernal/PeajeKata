<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TollTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function testStoreMethodIsWorking(): void
    {
        $response = $this->post('/api/tolls', [
            "name" => "testing",
            "city" => "testing",
            "income" => 0
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
                    "name" => "testing",
                    "city" => "testing",
                    "income" => 0
                ]);
    }
}