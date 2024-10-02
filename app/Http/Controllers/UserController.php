<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCOntroller extends Controller
{
    public function message()
    {
      $users = ['Aziz', 'Jasur', 'Firdavs', 'Nurmahamad', 'Jullodin'];

        return view('user', compact('users'));
    }
}
