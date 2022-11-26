<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsContoller extends Controller
{
    public function index()
    {
    // Validate the request...
    $cars = Car::all();
            foreach($cars as $car) {
            dd($car) . "<br>";
            }
        }

}
