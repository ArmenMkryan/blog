<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use 

class countryController extends Controller
{
    public function collection_class(){
        //Create a new collection using Collection class
        $collection1 = new Collection([67, 34, 89, 56, 23]);
        //dump the variable content in the browser
        dd($collection1);
        }









}
