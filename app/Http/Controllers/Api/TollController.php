<?php

namespace App\Http\Controllers\Api;

use App\Models\Toll;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TollController extends Controller
{
    public function store(Request $request)
    {
        $toll = Toll::create([
            "name" => $request->name,
            "city" => $request->city,
            "income" => $request->income
        ]);

        return response()->json($toll, 200);
    }
}
