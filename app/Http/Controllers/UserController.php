<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id)
    {
    echo "This is User with ID $id";
    }

    public function index()
     {
        $users = User::with(['identity'])->get();
        foreach($users as $user){

          echo '<b>Identity ID Name</b> : '. $user->name .'<br />';
          echo '<b>Identity ID</b> : '. $user->identity?->identity_number.'<br />';
          echo '--------------------------------------------- <br/>';

        }
     }

}


