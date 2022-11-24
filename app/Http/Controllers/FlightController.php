<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flight = Flight::where('number', 'FP-833')->first();
$flight->number = 'FR 456';
// $flight->refresh();
echo $flight->number; // "FP-833"
$flight->save();

    }

}
