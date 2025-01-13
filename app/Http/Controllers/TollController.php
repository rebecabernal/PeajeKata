<?php

namespace App\Http\Controllers;

use App\Models\Toll;
use Illuminate\Http\Request;

class TollController extends Controller
{
    public function index()
    {
        $tolls = Toll::all();

        return view('tolls', compact("tolls"));
    }
}
