<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class countryController extends Controller
{
    public function index()
    {
        $countries = DB::table('countries')
        ->where('region_name', 'Europe')
        ->orWhere('region_name', 'Asia')
        ->get();
        echo '<pre>';


        dd($countries);








    }
}
