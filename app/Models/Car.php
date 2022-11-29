<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;


        public function store(Request $request){
            $car = new Car;
    $car->brand = $request->brand;
    $car->model = $request->model;
    $car->year = $request->year;
    $car->mileage = $request->mileage;
    $car->price = $request->price;
    $car->save();
        }

}

