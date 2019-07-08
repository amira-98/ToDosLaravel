<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function new()
    {

       echo "hellloooo";
       return view('new');
    }
}
