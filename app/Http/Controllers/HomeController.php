<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __call($name, $arguments)
    {
        return view('principal');
    }
}
