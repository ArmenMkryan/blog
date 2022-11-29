<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
            'brand' => Str::random(10),
            'model' => Str::random(6),
            'year' => rand(1930,2022),
            'mileage' => rand(0,20000)],



            ['brand' => Str::random(10),
            'model' => Str::random(6),
            'year' => rand(1930,2022),
            'mileage' => rand(0,20000)],



            ['brand' => Str::random(10),
            'model' => Str::random(6),
            'year' => rand(1930,2022),
            'mileage' => rand(0,20000),
            ]
        ]);
    }

        }
