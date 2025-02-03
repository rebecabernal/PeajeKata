<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TollTest extends TestCase
{
<<<<<<< HEAD
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function testStoreMethodIsWorking(): void
    {
        $response = $this->post('/api/tolls', [
            "name" => "testing",
            "city" => "testing",
=======
    use RefreshDatabase;

    public function test_store_method_works(): void
    {
        $response = $this->post('/api/tolls', [
            "name" => "testName",
            "city" => "testCity",
>>>>>>> dev
            "income" => 0
        ]);

        $response->assertStatus(200)
                ->assertJsonFragment([
<<<<<<< HEAD
                    "name" => "testing",
                    "city" => "testing",
                    "income" => 0
                ]);
    }
}
=======
                    "name" => "testName",
                    "city" => "testCity",
                    "income" => 0
                ]);
    }
}
>>>>>>> dev
