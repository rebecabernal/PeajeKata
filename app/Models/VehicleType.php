<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $fillable = [
        "type",
        "price"
    ];

    public function vehicleType()
    {
        return $this->belongsToMany(Vehicle::class, "vehicle_type");
    }

    public function tolls()
    {
        return $this->belongsToMany(Toll::class, "vehicle_toll");
    }

}
