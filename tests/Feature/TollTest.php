<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Toll;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TollTest extends TestCase
{
    use RefreshDatabase;

    public function testIfIndexMethodIsWorking(): void
    {
        
        $this->withoutExceptionHandling();
        
        Toll::create([
            "name" => "test",
            "city" => "test",
            "income" => 0
        ]);

        $response = $this->get('/tolls');

        $response->assertStatus(200);
    }
}
