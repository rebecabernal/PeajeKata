<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicle_toll', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicles_id')->constrained("vehicle")->onDelete("cascade");
            $table->foreignId('tolls_id')->constrained("tolls")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_toll');
    }
};
